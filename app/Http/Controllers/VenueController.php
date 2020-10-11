<?php

namespace App\Http\Controllers;

use App\Models\BookingList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VenueController extends Controller
{
    public function index()
    {
        $data['upcomingLists'] = $this->upcomingLists();
        $data['schedules'] = $this->schedules();
        $data['bookingLists'] = $this->bookingLists();
        $data['requestLists'] = $this->requestLists();
        $data['sparringLists'] = $this->sparringLists();
        $data['reviewLists'] = $this->reviewLists();
        return view('venue.dashboard', $data);
    }

    private function convertToTime($integer)
    {
        if (strlen($integer) == 1) {
            return '0' . $integer . ':00';
        } else if (strlen($integer) == 2) {
            return $integer . ':00';
        } else {
            return false;
        }
    }

    private function schedules()
    {
        $thisMonth = now()->month;
        $venueFields = Auth::user()->venues->first()->fields->toArray();
        $idVenueFields = array_map(function ($data) {
            return $data['id'];
        }, $venueFields);
        $firstDateInThisMonth = now()->startOfMonth();
        $endDateInThisMonth = now()->endOfMonth();
        $allDateInThisMonth = \Carbon\CarbonPeriod::create($firstDateInThisMonth, $endDateInThisMonth);
        $dataSchedule = BookingList::whereIn('venue_field_id', $idVenueFields)->whereMonth('date', $thisMonth)->where('is_accepted', 1)->where('flag_active', 1);

        // $schedulesThisMonth = BookingList::whereIn('venue_field_id', $idVenueFields)->whereMonth('date', $thisMonth)->where('is_accepted', 1)->where('flag_active', 1);

        $schedules = [];
        foreach ($allDateInThisMonth as $i => $date) {
            $schedules[$i] = ['date' => $date->isoFormat('DD MMMM YYYY')];

            $loop = 6;
            while ($loop <= 24) {
                $hour = $this->convertToTime($loop);
                $tempDataSchedule = clone $dataSchedule;
                $dateBooked = $tempDataSchedule->whereDate('date', '=', $date)->where('hour', $hour)->first();
                if ($dateBooked != NULL) {
                    if ($dateBooked->duration >= 1) {
                        foreach (range(1, $dateBooked->duration) as $interval) {
                            $schedules[$i]['time'][] = $hour;
                            $schedules[$i]['availibility'][] = true;
                            $loop++;
                            $hour = $this->convertToTime($loop);
                        }
                    }
                } else {
                    $schedules[$i]['time'][] = $hour;
                    $schedules[$i]['availibility'][] = false;
                    $loop++;
                }
            }
        }
        return $schedules;
    }

    private function upcomingLists()
    {
        $upcomingList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'vf.field_name', 'b.booking_type', 'b.date', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->whereDate('b.date', '=', today()->format('Y-m-d'))
            ->whereTime('b.date', '>=', Carbon::now())
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $upcomingList;
    }

    private function bookingLists()
    {
        $bookingList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'ut.bio', 'vf.field_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->whereDate('b.date', '>', today()->format('Y-m-d'))
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $bookingList;
    }

    private function requestLists()
    {
        $requestList = DB::table('booking_lists AS b')
            ->select('b.id', 'ut.team_name', 'vf.field_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->whereDate('b.date', '>=', today()->format('Y-m-d'))
            ->where('b.is_accepted', 0)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $requestList;
    }

    private function sparringLists()
    {
        $sparringList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'vf.field_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->whereDate('b.date', '>=', today()->format('Y-m-d'))
            ->where('b.is_accepted', 1)
            ->whereNotNull('b.sparring_user')
            ->where('b.booking_type', 'sparring')
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $sparringList;
    }

    private function reviewLists()
    {
        $reviewList = DB::table('reviews AS r')
            ->select('ut.team_name', 'r.review_type', 'r.comment', 'vf.field_name', 'vf.field_type', 'b.date')
            ->leftjoin('booking_lists AS b', 'b.id', '=', 'r.booking_list_id')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'r.user_reporter_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->where('r.object_type', 'venue')
            ->where('r.user_reported_id', Auth::user()->id)
            ->where('r.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $reviewList;
    }

    // return FlashSession::error(url("hiring-partner"), 'Company Logo is required, please upload your company logo!');

}
