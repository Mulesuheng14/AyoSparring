<?php

namespace App\Http\Controllers;

use App\Classing\FlashSession;
use App\Models\BookingList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VenueController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $now = Carbon::now();
        $endTrial = Carbon::parse($user->verified_at)->addMonths(1);
        $payment_status = $user->venues->first()->payment_status;
        if ($payment_status == 0 && $now > $endTrial) {
            $statusTrial = 0;
        } else {
            $statusTrial = 1;
        }
        $endTrial = $endTrial->format('d M Y');

        $data['statusTrial'] = $statusTrial;
        $data['endTrial'] = $endTrial;
        $data['upcomingLists'] = $this->upcomingLists();
        $data['schedules'] = $this->schedules();
        $data['bookingLists'] = $this->bookingLists();
        $data['requestLists'] = $this->requestLists();
        $data['sparringLists'] = $this->sparringLists();
        $data['reviewLists'] = $this->reviewLists();
        return view('venue.dashboard', $data);
    }

    public function responseBooking(Request $request, $status)
    {
        $currentBookingList = BookingList::where('id', $request->id_booking_list)->where('flag_active', 1)->first();
        if ($currentBookingList == null) {
            return FlashSession::error('venue/dashboard', 'Response booking request failed, booking request not found!');
        }
        if ($status == 'accepted') {

            $hourBooking = [];
            for ($i = 0; $i < $currentBookingList->duration; $i++) {
                $hourBooking[] = substr(strval($currentBookingList->hour), 0, 2) + $i;
            }

            $bookingLists = BookingList::select('user_id', 'date', 'duration', 'hour')->whereDate('date', '=', $currentBookingList)->where('id', '!=', $currentBookingList->id)->where('is_accepted', 1)->where('flag_active', 1)->get();
            if ($bookingLists != null) {
                foreach ($bookingLists as $bookingList) {
                    for ($a = 0; $a < $bookingList->duration; $a++) {
                        $existHour = substr(strval($bookingList->hour), 0, 2) + $a;
                        for ($b = 0; $b < $currentBookingList->duration; $b++) {
                            if ($existHour == $hourBooking[$b]) {
                                return FlashSession::error('user/dashboard', 'Request booking failed, Booking hour has booked!');
                            }
                        }
                    }
                }
            }

            $responseBookingList = $currentBookingList->update([
                'is_accepted' => 1,
                'updated_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);
            if ($responseBookingList) {
                return FlashSession::success('venue/dashboard', 'Response booking request successful');
            }
        } else {
            $responseBookingList = $currentBookingList->update([
                'is_accepted' => 0,
                'updated_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
                'flag_active' => 0,
            ]);

            if ($responseBookingList) {
                return FlashSession::success('venue/dashboard', 'Response booking request successful');
            }
        }
        return FlashSession::error('venue/dashboard', 'Response booking request failed when update database');
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
        // $idVenueFields = array_map(function ($data) {
        //     return $data['id'];
        // }, $venueFields);
        $firstDateInThisMonth = now()->startOfMonth();
        $endDateInThisMonth = now()->endOfMonth();
        $allDateInThisMonth = \Carbon\CarbonPeriod::create($firstDateInThisMonth, $endDateInThisMonth);
        $schedules = [];
        foreach ($venueFields as $tempVenueField) {
            $dataSchedule = BookingList::where('venue_field_id', $tempVenueField['id'])
                ->whereMonth('date', $thisMonth)
                ->where('is_accepted', 1)
                ->where('flag_active', 1);
            $tempVenue = [];
            $tempVenue['venue_field'] = $tempVenueField;
            foreach ($allDateInThisMonth as $i => $date) {
                $tempVenue['schedule'][$i] = ['date' => $date->isoFormat('DD MMMM YYYY')];

                $loop = 6;
                while ($loop <= 24) {
                    $hour = $this->convertToTime($loop);
                    $tempDataSchedule = clone $dataSchedule;
                    $dateBooked = $tempDataSchedule->whereDate('date', '=', $date)->where('hour', $hour)->first();
                    if ($dateBooked != NULL) {
                        if ($dateBooked->duration >= 1) {
                            foreach (range(1, $dateBooked->duration) as $interval) {
                                $tempVenue['schedule'][$i]['time'][] = $hour;
                                $tempVenue['schedule'][$i]['availibility'][] = true;
                                $loop++;
                                $hour = $this->convertToTime($loop);
                            }
                        }
                    } else {
                        $tempVenue['schedule'][$i]['time'][] = $hour;
                        $tempVenue['schedule'][$i]['availibility'][] = false;
                        $loop++;
                    }
                }
            }
            $schedules[] = $tempVenue;
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
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->whereDate('b.date', '=', today()->format('Y-m-d'))
            ->where('b.date', '>=', Carbon::parse(Carbon::now())->addHour(-1))
            ->where('uv.user_id', Auth::user()->id)
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $upcomingList;
    }

    private function bookingLists()
    {
        $bookingList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'ut.bio', 'ut.category', 'u.phone_number', 'vf.field_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('users AS u', 'u.id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>', Carbon::now())
            ->where('uv.user_id', Auth::user()->id)
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $bookingList;
    }

    private function requestLists()
    {
        $requestList = DB::table('booking_lists AS b')
            ->select('b.id', 'ut.team_name', 'ut.category', 'ut.bio', 'u.phone_number', 'vf.field_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('users AS u', 'u.id', '=', 'b.user_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>=', Carbon::now())
            ->where('uv.user_id', Auth::user()->id)
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
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->where('b.date', '>=', Carbon::now())
            ->where('uv.user_id', Auth::user()->id)
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
}
