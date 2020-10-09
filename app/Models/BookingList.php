<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingList extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'user_id', 'venue_field_id', 'is_accepted', 'booking_type', 'date', 'hour',
        'duration', 'price', 'sparring_user', 'is_available', 'is_paid',
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function field()
    {
        return $this->belongsTo('App\Models\VenueField', 'venue_field_id');
    }

    public function sparringUser()
    {
        return $this->belongsTo('App\Models\User', 'sparring_user');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review', 'booking_list_id');
    }

    public function sparringRequests()
    {
        return $this->hasMany('App\Models\SparringRequest', 'booking_list_id');
    }
}
