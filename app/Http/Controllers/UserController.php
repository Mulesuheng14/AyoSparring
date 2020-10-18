<?php

namespace App\Http\Controllers;

use App\Classing\FlashSession;
use App\Models\BookingList;
use App\Models\Review;
use App\Models\SparringRequest;
use App\Models\User;
use App\Models\UserVenue;
use App\Models\VenueField;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $data['requestLists'] = $this->requestLists();
        $data['schedules'] = $this->schedules();
        $data['bookingLists'] = $this->bookingLists();
        $data['sparringLists'] = $this->sparringLists();
        $data['historyLists'] = $this->historyLists();
        $data['reviewLists'] = $this->reviewLists();

        return view('user.dashboard', $data);
    }

    public function requestBooking(Request $request)
    {
        $dateHour = ($request->date) . ' ' . strval($request->start) . ':00';
        if ($dateHour < Carbon::now()) {
            return FlashSession::error('user/dashboard', 'Request booking failed, today hour date is greater than input date!');
        } else if (substr(strval($request->start), 3) != '00') {
            return FlashSession::error('user/dashboard', 'Request booking failed, the hour start must be ended by :00!');
        }

        $currentField = VenueField::where('id', $request->id_venue_field)->where('flag_active', 1)->first();
        if ($currentField == null) {
            return FlashSession::error('user/dashboard', 'Request booking failed, id field not found!');
        }

        // $duration = substr(strval($request->end), 0, 2) - substr(strval($request->start), 0, 2);

        $hourBooking = [];
        for ($i = 0; $i < $request->duration; $i++) {
            $hourBooking[$i] = substr(strval($request->start), 0, 2) + $i;
            if ($hourBooking[$i] < 6 || $hourBooking[$i] > 24) {
                return FlashSession::error('user/dashboard', 'Request booking failed, venue opens at 06.00 - 24.00!');
            }
        }

        $bookingLists = BookingList::select('user_id', 'date', 'duration', 'hour')->whereDate('date', '=', $request->date)->where('is_accepted', 1)->where('flag_active', 1)->get();
        if ($bookingLists != null) {
            foreach ($bookingLists as $bookingList) {
                for ($a = 0; $a < $bookingList->duration; $a++) {
                    $existHour = substr(strval($bookingList->hour), 0, 2) + $a;
                    for ($b = 0; $b < $request->duration; $b++) {
                        if ($existHour == $hourBooking[$b]) {
                            if ($bookingList->user_id == Auth::user()->id) {
                                return FlashSession::error('user/dashboard', 'You have already booked!');
                            } else {
                                return FlashSession::error('user/dashboard', 'Request booking failed, Booking hour has booked!');
                            }
                        }
                    }
                }
            }
        }
        $available = 0;
        if ($request->booking_type == 'sparring') {
            $available = 1;
        }
        $requestBooking = BookingList::create([
            'user_id' => Auth::user()->id,
            'venue_field_id' => $request->id_venue_field,
            'date' => substr(strval($request->date), 0, 10) . ' ' . strval($request->start) . ':00',
            'hour' => $request->start,
            'duration' => $request->duration,
            'price' => $request->price * $request->duration,
            'booking_type' => $request->booking_type,
            'is_available' => $available,
            'created_at' => Carbon::now(),
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
            'updated_by' => Auth::user()->id,
        ]);

        if ($requestBooking) {
            return FlashSession::success('user/dashboard', 'Response booking request successful');
        } else {
            return FlashSession::error('user/dashboard', 'Response booking request failed');
        }
    }

    public function responseSparring(Request $request, $status)
    {
        $currentSparringRequest = SparringRequest::where('id', $request->id_sparring_request)->where('flag_active', 1)->first();
        if ($currentSparringRequest == null) {
            return FlashSession::error('user/dashboard', 'Response sparring request failed, sparring request not found!');
        }
        if ($status == 'accepted') {

            $currentBookingList = BookingList::where('id', $request->id_booking_list)->where('flag_active', 1)->first();
            if ($currentBookingList == null) {
                return FlashSession::error('user/dashboard', 'Response sparring request failed, id booking not found!');
            }

            if ($currentBookingList->is_available == 0) {
                return FlashSession::error('user/dashboard', 'Response sparring request failed, your team has had sparring team!');
            }

            $responseSparringRequest = $currentSparringRequest->update([
                'is_accepted' => 1,
                'updated_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
                'flag_active' => 0,
            ]);

            if ($responseSparringRequest) {
                $responseBookingList = $currentBookingList->update([
                    'sparring_user' => $request->id_user,
                    'is_available' => 0,
                    'updated_by' => Auth::user()->id,
                    'updated_at' => Carbon::now(),
                ]);
                if ($responseBookingList) {
                    return FlashSession::success('user/dashboard', 'Response sparring request successful');
                }
            }
        } else {
            $responseSparringRequest = $currentSparringRequest->update([
                'is_accepted' => 0,
                'updated_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
                'flag_active' => 0,
            ]);

            if ($responseSparringRequest) {
                return FlashSession::success('user/dashboard', 'Response sparring request successful');
            }
        }
        return FlashSession::error('user/dashboard', 'Response sparring request failed when update database');
    }

    public function requestSparring(Request $request)
    {
        $existRequestSparring = SparringRequest::where('user_id', Auth::user()->id)->where('booking_list_id', $request->id_booking_list)->first();
        if ($existRequestSparring) {
            return FlashSession::error('user/dashboard', 'Request sparring failed, You have requested!');
        }
        $currentBookingList = BookingList::where('id', $request->id_booking_list)->where('is_accepted', 1)->where('is_available', 1)->where('flag_active', 1)->first();
        if ($currentBookingList == null) {
            return FlashSession::error('user/dashboard', 'Request sparring failed, id booking not found!');
        }

        $requestSparring = SparringRequest::create([
            'user_id' => Auth::user()->id,
            'booking_list_id' => $request->id_booking_list,
            'created_at' => Carbon::now(),
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
            'updated_by' => Auth::user()->id,
        ]);

        if ($requestSparring) {
            return FlashSession::success('user/dashboard', 'Response sparring request successful');
        } else {
            return FlashSession::error('user/dashboard', 'Response sparring request failed');
        }
    }

    private function schedules()
    {
        $thisMonth = now()->month;
        $firstDateInThisMonth = now()->startOfMonth();
        $endDateInThisMonth = now()->endOfMonth();
        $allDateInThisMonth = \Carbon\CarbonPeriod::create($firstDateInThisMonth, $endDateInThisMonth);
        $schedules = [];
        $ownerId = User::select('id')->where('role', 2)->where('verified', 1)->where('flag_active', 1)->get();
        $userVenue = UserVenue::whereIn('user_id', $ownerId)->where('flag_active', 1)->get();
        foreach ($userVenue as $tempUserVenue) {
            $venueFields = VenueField::where('user_venue_id', $tempUserVenue['id'])->where('flag_active', 1)->get();
            $schedule = [];
            $schedule['venue'] = $tempUserVenue;
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
                $schedule['field'][] = $tempVenue;
            }
            $schedules[] = $schedule;
        }
        return $schedules;
    }

    public function review(Request $request, $status)
    {
        $currentBookingList = BookingList::where('id', $request->id_booking_list)->where('flag_active', 1)->first();
        if ($currentBookingList == null) {
            return FlashSession::error('user/dashboard', 'Review failed, id booking not found!');
        }

        $currentUserReported = User::where('id', $request->id_user_reported)->where('flag_active', 1)->first();
        if ($currentUserReported == null) {
            return FlashSession::error('user/dashboard', 'Review failed, id user reported not found!');
        }

        $existReview = Review::where('booking_list_id', $request->id_booking_list)
            ->where('user_reporter_id', Auth::user()->id)
            ->where('user_reported_id', $request->id_user_reported)
            ->where('flag_active', 1)
            ->first();
        if ($request->object_type == 'venue' && $existReview != null) {
            return FlashSession::warning('user/dashboard', 'Review failed, you have reviewed the venue!');
        } else if ($request->object_type == 'team' && $existReview != null) {
            return FlashSession::warning('user/dashboard', 'Review failed, you have reviewed the team!');
        }

        $review = Review::create([
            'user_reporter_id' => Auth::user()->id,
            'user_reported_id' => $request->id_user_reported,
            'booking_list_id' => $request->id_booking_list,
            'object_type' => $request->object_type,
            'review_type' => $status,
            'comment' => $request->review,
            'created_at' => Carbon::now(),
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
            'updated_by' => Auth::user()->id,
        ]);

        if ($review) {
            return FlashSession::success('user/dashboard', 'Review successful');
        } else {
            return FlashSession::error('user/dashboard', 'Review failed');
        }
    }

    private function bookingLists()
    {
        $bookingList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'ut.bio', 'vf.field_name', 'uv.venue_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>=', Carbon::parse(Carbon::now())->addHour(-1))
            ->where(function ($q) {
                $q->orwhere('b.user_id', Auth::user()->id)
                    ->orWhere('b.sparring_user', Auth::user()->id);
            })
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $bookingList;
    }

    private function requestLists()
    {
        $requestList = DB::table('sparring_requests AS s')
            ->select('s.id as sparring_request_id', 'ut.category', 'ut.bio', 'u.phone_number', 's.booking_list_id', 's.user_id', 'ut.team_name', 'vf.field_name', 'uv.venue_name', 'b.date')
            ->leftjoin('booking_lists AS b', 'b.id', '=', 's.booking_list_id')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 's.user_id')
            ->leftjoin('users AS u', 'u.id', '=', 's.user_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>=', Carbon::now())
            ->where('b.user_id', Auth::user()->id)
            ->where('s.is_accepted', 0)
            ->where('b.is_accepted', 1)
            ->where('b.booking_type', 'sparring')
            ->where('b.is_available', 1)
            ->where('b.flag_active', 1)
            ->where('s.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        foreach ($requestList as $key => $value) {
            $tempReview = Review::select('comment')->where('user_reported_id', $value->user_id)->orderBy('created_at', 'DESC')->first();
            $requestList[$key]->latest_review = $tempReview->comment;
        }
        return $requestList;
    }

    private function sparringLists()
    {
        $sparringList = DB::table('booking_lists AS b')
            ->select('b.id', 'b.user_id', 'ut.team_name', 'ut.category', 'ut.bio', 'u.phone_number', 'vf.field_name', 'uv.venue_name', 'b.booking_type', 'b.date')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('users AS u', 'u.id', '=', 'b.user_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>=', Carbon::now())
            ->where('b.user_id', '!=', Auth::user()->id)
            ->where('b.is_available', 1)
            ->where('b.booking_type', 'sparring')
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        foreach ($sparringList as $key => $value) {
            $tempReview = Review::select('comment')->where('user_reported_id', $value->user_id)->orderBy('created_at', 'DESC')->first();
            $sparringList[$key]->latest_review = $tempReview->comment;
        }
        return $sparringList;
    }

    private function historyLists()
    {
        $historyList = DB::table('booking_lists AS b')
            ->select('b.id', 'uv.user_id AS user_owner_id', 'ut.user_id AS user_team_id', 'ut.team_name', 'ut.bio', 'vf.field_name', 'uv.venue_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '<', Carbon::parse(Carbon::now())->addHour(-1))
            ->where(function ($q) {
                $q->orwhere('b.user_id', Auth::user()->id)
                    ->orWhere('b.sparring_user', Auth::user()->id);
            })
            ->where('b.is_accepted', 1)
            ->where('b.flag_active', 1)
            ->orderBy('b.date', 'DESC')
            ->get();
        return $historyList;
    }

    private function reviewLists()
    {
        $reviewList = DB::table('reviews AS r')
            ->select('ut.team_name', 'r.review_type', 'r.comment', 'vf.field_name', 'vf.field_type', 'b.date')
            ->leftjoin('booking_lists AS b', 'b.id', '=', 'r.booking_list_id')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'r.user_reporter_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->where('r.object_type', 'team')
            ->where('r.user_reported_id', Auth::user()->id)
            ->where('r.flag_active', 1)
            ->get();
        return $reviewList;
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

    // return FlashSession::error(url("hiring-partner"), 'Company Logo is required, please upload your company logo!');

}
