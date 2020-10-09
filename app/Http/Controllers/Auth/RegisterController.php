<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use App\Models\UserTeam;
use Illuminate\Http\Request;
use App\Classing\FlashSession;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\UserVenue;
use App\Models\VenueField;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        if(Auth::user()) {
            if(Auth::user()->role == 1) {
                return redirect('admin/dashboard');
            } else if(Auth::user()->role == 2) {
                return redirect('venue/dashboard');
            } else if(Auth::user()->role == 3) {
                return redirect('user/dashboard');
            }
        }

        return view('guest.register.user',);
    }

    public function registerVenue(Request $request)
    {
        if(Auth::user()) {
            if(Auth::user()->role == 1) {
                return redirect('admin/dashboard');
            } else if(Auth::user()->role == 2) {
                return redirect('venue/dashboard');
            } else if(Auth::user()->role == 3) {
                return redirect('user/dashboard');
            }
        }
        
        return view('guest.register.venue');
    }

    public function registerUserSubmit(Request $request)
    {
        if(User::where('email',$request->email)->exists()) {
            return FlashSession::error(url('register/user'), 'Email is already in used!');
        }
        
        if(!$request->hasFile('photo')) {
            return FlashSession::error(url('register/user'), 'Team photo must be filled!');
        }

        $rulesValidation = array(
            'club_name' => 'required',
            'category' => 'required',
            'date_established' => 'required',
            'postal_code' => 'required',
            'address' => 'required',
            'photo' => 'required',
            'manager' => 'required',
            'bio' => 'required',
            'phone_number' => 'required|min:8|max:12',
            'email' => 'required|email',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8'
        );

        $validator = Validator::make($request->all(), $rulesValidation);
        if ($validator->fails()) {
            $errors = $validator->errors();

            return FlashSession::error(url('register/user'), 'Please make sure the data submitted is correct!');
        }

        DB::beginTransaction();

        $storeUser = User::create([
            'name' => $request->manager,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 3,
            'account_type' => 'user',
            'created_at' => Carbon::now(),
            'created_by' => 'Self',
            'updated_at' => Carbon::now(),
            'updated_by' => 'Self',
        ]);

        if($storeUser) {
            $id_user = $storeUser->id;

            $storeTeam = UserTeam::create([
                'user_id' => $id_user,
                'team_name' => $request->club_name,
                'category' => $request->category,
                'date_established' => $request->date_established,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'bio' => $request->bio,
                'created_at' => Carbon::now(),
                'created_by' => 'Self',
                'updated_at' => Carbon::now(),
                'updated_by' => 'Self',
            ]);
    
            if($storeTeam) {
                $filename = $request->club_name.'_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
                
                try {
                    $request->file('photo')->storeAs('public/storage/team', $filename);
                }
                catch (Exception $e) {
                    DB::rollBack();
                    return FlashSession::error(url('register/user'), 'Registration failed when uploading team photo/logo to server!');
                }

                $updatePhoto = UserTeam::where('id',$id_user)->update([
                    'photo' => $filename,
                    'updated_at' => Carbon::now(),
                    'updated_by' => 'Self',
                ]);

                if($updatePhoto) {
                    DB::commit();
                    return FlashSession::success(url('login'), 'Registration success!');
                } else {
                    DB::rollBack();
                    return FlashSession::error(url('register/user'), 'Registration failed when saving team photo/logo to database!');
                }
            } else {
                DB::rollBack();
                return FlashSession::error(url('register/user'), 'Registration failed saving data team!');
            }
        } else {
            DB::rollBack();
            return FlashSession::error(url('register/user'), 'Registration failed saving data user!');
        }
    }

    public function registerVenueSubmit(Request $request)
    {
        if(User::where('email',$request->email)->exists()) {
            return FlashSession::error(url('register/user'), 'Email is already in used!');
        }
        
        if(!$request->hasFile('photo_venue')) {
            return FlashSession::error(url('register/user'), 'Venue photo / logo must be filled!');
        }

        if(!$request->hasFile('image_field')) {
            return FlashSession::error(url('register/user'), 'Field image must be filled!');
        }
        
        $rulesValidation = array(
            'venue_name' => 'required',
            'address' => 'required',
            'phone_number_venue' => 'required|min:8|max:12',
            'postal_code' => 'required',
            'field_name'    => 'required|array|min:1',
            'field_name.*'  => 'required|min:1',
            'field_type'    => 'required|array|min:1',
            'field_type.*'  => 'required|min:1',
            'price'    => 'required|array|min:1',
            'price.*'  => 'required|min:1',
            'owner_name' => 'required',
            'nik' => 'required',
            'phone_number_owner' => 'required|min:8|max:12',
            'email' => 'required|email',
            'password' => 'min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:8',
            'photo_venue' => 'required',
            'image_field'    => 'required|array|min:1',
            'image_field.*'  => 'required|min:1'
        );

        $validator = Validator::make($request->all(), $rulesValidation);
        if ($validator->fails()) {
            $errors = $validator->errors();

            return FlashSession::error(url('register/user'), 'Please make sure the data submitted is correct!');
        }

        DB::beginTransaction();

        $storeUser = User::create([
            'name' => $request->owner_name,
            'phone_number' => $request->phone_number_owner,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2,
            'account_type' => 'venue',
            'created_at' => Carbon::now(),
            'created_by' => 'Self',
            'updated_at' => Carbon::now(),
            'updated_by' => 'Self',
        ]);

        if($storeUser) {
            $id_user = $storeUser->id;

            $storeVenue = UserVenue::create([
                'user_id' => $id_user,
                'venue_name' => $request->venue_name,
                'address' => $request->address,
                'phone_number' => $request->phone_number_venue,
                'postal_code' => $request->postal_code,
                'nik' => $request->nik,
                'created_at' => Carbon::now(),
                'created_by' => 'Self',
                'updated_at' => Carbon::now(),
                'updated_by' => 'Self',
            ]);
    
            if($storeVenue) {
                $id_venue = $storeVenue->id;
                
                $filename = $request->venue_name.'_'.time().'.'.$request->file('photo_venue')->getClientOriginalExtension();
                
                try {
                    $request->file('photo_venue')->storeAs('public/storage/venue', $filename);
                }
                catch (Exception $e) {
                    return FlashSession::error(url('register/user'), 'Registration failed when uploading venue photo/logo to server!');
                }

                $updatePhoto = UserVenue::where('id',$id_venue)->update([
                    'photo' => $filename,
                    'updated_at' => Carbon::now(),
                    'updated_by' => 'Self',
                ]);

                if($updatePhoto) {
                    $files = $request->file('image_field');
                    
                    foreach ($files as $index => $file) {
                        $filename = '';

                        try {
                            $filename = $request->field_name[$index].'_'.time().'.'.$file->getClientOriginalExtension();
                            $file->storeAs('public/storage/field', $filename);
                        }
                        catch (Exception $e) {
                            DB::rollBack();
                            return FlashSession::error(url('register/venue'), 'Registration failed when uploading team field image to server!');
                        }

                        $storeVenueField = VenueField::create([
                            'user_venue_id' => $id_venue,
                            'field_name' => $request->field_name[$index],
                            'field_type' => $request->field_type[$index],
                            'price' => $request->price[$index],
                            'photo' => $filename,
                            'created_at' => Carbon::now(),
                            'created_by' => 'Self',
                            'updated_at' => Carbon::now(),
                            'updated_by' => 'Self',
                        ]);

                        if(!$storeVenueField) {
                            DB::rollBack();
                            return FlashSession::error(url('register/venue'), 'Registration failed when store data venue field to database!');
                        }
                    }

                    DB::commit();
                    return FlashSession::success(url('login'), 'Registration success!');
                } else {
                    DB::rollBack();
                    return FlashSession::error(url('register/venue'), 'Registration failed when saving venue photo/logo to database!');
                }
            } else {
                DB::rollBack();
                return FlashSession::error(url('register/venue'), 'Registration failed saving data venue!');
            }
        } else {
            DB::rollBack();
            return FlashSession::error(url('register/venue'), 'Registration failed saving data user!');
        }
    }
}
