<?php

namespace App\Http\Controllers;

use App\Classing\FlashSession;
use App\Models\BookingList;
use App\Models\SparringRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $data['bookingLists'] = $this->bookingLists();
        $data['requestLists'] = $this->requestLists();
        $data['sparringLists'] = $this->sparringLists();
        $data['historyLists'] = $this->historyLists();
        $data['reviewLists'] = $this->reviewLists();

        return view('user.dashboard', $data);
    }

    public function responseSparring(Request $request, $status)
    {
        $currentSparringRequest = SparringRequest::where('id', $request->id_sparring_request)->first();
        if ($currentSparringRequest == null) {
            return FlashSession::error('user/dashboard', 'Response sparring request failed, sparring request not found!');
        }
        if ($status == 'accepted') {

            $currentBookingList = BookingList::where('id', $request->id_booking_list)->first();
            if ($currentBookingList == null) {
                return FlashSession::error('user/dashboard', 'Response sparring request failed, id booking not found!');
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

    private function bookingLists()
    {
        $bookingList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'ut.bio', 'vf.field_name', 'uv.venue_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>=', Carbon::now())
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
            ->select('s.id as sparring_request_id', 's.booking_list_id', 's.user_id', 'ut.team_name', 'vf.field_name', 'uv.venue_name', 'b.date')
            ->leftjoin('booking_lists AS b', 'b.id', '=', 's.booking_list_id')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 's.user_id')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '>=', Carbon::now())
            ->where('s.is_accepted', 0)
            ->where('b.is_accepted', 1)
            ->where('b.booking_type', 'sparring')
            ->where('b.is_available', 1)
            ->where('b.flag_active', 1)
            ->where('s.flag_active', 1)
            ->orderBy('b.date', 'ASC')
            ->get();
        return $requestList;
    }

    private function sparringLists()
    {
        $sparringList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'ut.bio', 'vf.field_name', 'uv.venue_name', 'b.booking_type', 'b.date')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
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
        return $sparringList;
    }

    private function historyLists()
    {
        $historyList = DB::table('booking_lists AS b')
            ->select('ut.team_name', 'ut.bio', 'vf.field_name', 'uv.venue_name', 'b.booking_type', 'b.date', 'b.hour', 'b.duration', 'b.sparring_user', 'tu.team_name AS sparring_name')
            ->leftjoin('user_teams AS ut', 'ut.user_id', '=', 'b.user_id')
            ->leftjoin('user_teams AS tu', 'tu.user_id', '=', 'b.sparring_user')
            ->leftjoin('venue_fields AS vf', 'vf.id', '=', 'b.venue_field_id')
            ->leftjoin('user_venues AS uv', 'uv.id', '=', 'vf.user_venue_id')
            ->where('b.date', '<', Carbon::now())
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
            ->where('r.object_type', 'user')
            ->where('r.user_reported_id', Auth::user()->id)
            ->where('r.flag_active', 1)
            ->get();
        return $reviewList;
    }

    // return FlashSession::error(url("hiring-partner"), 'Company Logo is required, please upload your company logo!');

}
