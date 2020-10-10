<?php

namespace App\Http\Controllers;

use App\Models\BookingList;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VenueController extends Controller
{
    public function index()
    {
        $thisMonth = now()->month;;
        $firstDateInThisMonth = now()->startOfMonth();
        $endDateInThisMonth = now()->endOfMonth();
        $allDateInThisMonth = \Carbon\CarbonPeriod::create($firstDateInThisMonth, $endDateInThisMonth);

        $schedulesThisMonth = BookingList::whereMonth('date', $thisMonth)->where('flag_active',1);

        $schedules = [];
        foreach($allDateInThisMonth as $i => $date) {
            $schedules[$i] = ['date' => $date->isoFormat('DD MMMM YYYY')];
            foreach(range(6,24) as $time) {
                $schedules[$i]['time'][] = $time;

                $statusAvailable = false;
                $dateBooked = $schedulesThisMonth->whereDate('date', '=', $date->toDateString())->first();
                if($dateBooked != NULL) {
                    $statusAvailable = true;
                }
                $schedules[$i]['availibility'][] = $statusAvailable;
            }
        }

        $data['schedules'] = $schedules;

        return view('venue.dashboard',$data);
    }

    private function convertToTime($integer)
    {
        if(strlen($integer) == 1) {
            return '0'.$integer.':00';
        } else if(strlen($integer) == 2) {
            return $integer.':00';
        } else {
            return "Format jam salah";
        }
    }

    // return FlashSession::error(url("hiring-partner"), 'Company Logo is required, please upload your company logo!');

}
