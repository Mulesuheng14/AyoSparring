<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Classing\FlashSession;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $data['users'] = User::where('role','!=',1)->where('flag_active',1)->get();
        $data['venues'] = DB::table('users AS u')
                            ->select('u.name','uv.venue_name','uv.address','vf.field_name','vf.field_type','vf.price','vf.photo')
                            ->leftjoin('user_venues AS uv', 'uv.user_id', '=', 'u.id')
                            ->leftjoin('venue_fields AS vf', 'vf.user_venue_id', '=', 'uv.id')
                            ->where('u.role',2)
                            ->where('u.flag_active',1)
                            ->get();

        $review = Review::where('flag_active',1);
        $data['review_reports'] = $review->where('review_type','report')->get();
        $data['review_ulasans'] = $review->where('review_type','ulasan')->get();
        
        return view('admin.dashboard',$data);
    }

    public function verification(Request $request, $status)
    {
        $currentUser = User::where('id',$request->id_user)->first();
        if($currentUser == null) {
            return FlashSession::error('admin/dashboard', 'Verification failed, user not found!');
        }

        $statusVerification = 0;
        if($status == 'active') {
            $statusVerification = 1;
        } else if($status == 'deactive') {
            $statusVerification = 0;
        }

        $verificationUser = User::where('id',$request->id_user)->update([
            'verified' => $statusVerification,
            'verified_at' => Carbon::now(),
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        if($verificationUser) {
            return FlashSession::success('admin/dashboard', 'Verification account successful');
        }
        
        return FlashSession::success('admin/dashboard', 'Verification failed when update database');
    }

    public function block(Request $request)
    {
        $currentUser = User::where('id',$request->id_user)->first();
        if($currentUser == null) {
            return FlashSession::error('admin/dashboard', 'Block account failed, user not found!');
        }

        $verificationUser = User::where('id',$request->id_user)->update([
            'flag_active' => 0,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        if($verificationUser) {
            return FlashSession::success('admin/dashboard', 'Block account successful');
        }
        
        return FlashSession::success('admin/dashboard', 'Block account failed when update database');
    }
}
