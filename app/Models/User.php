<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone_number', 'email', 'role', 'verified_at', 'verified', 'password', 'account_type',
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];

    public function teams()
    {
        return $this->hasMany('App\Models\UserTeam', 'user_id');
    }

    public function venues()
    {
        return $this->hasMany('App\Models\UserVenue', 'user_id');
    }

    public function bookings()
    {
        return $this->hasMany('App\Models\BookingList', 'user_id');
    }

    public function sparringRequests()
    {
        return $this->hasMany('App\Models\SparringRequest', 'user_id');
    }

    public function reviewReporter()
    {
        return $this->hasMany('App\Models\Review', 'user_reporter_id');
    }

    public function reviewReported()
    {
        return $this->hasMany('App\Models\Review', 'user_reported_id');
    }

    public function bookingSparrings()
    {
        return $this->hasMany('App\Models\BookingList', 'sparring_user');
    }
}
