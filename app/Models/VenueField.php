<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VenueField extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'user_venue_id', 'field_name', 'field_type', 'price', 'photo', 
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];

    public function venue()
    {
        return $this->belongsTo('App\Models\UserVenue', 'user_venue_id');
    }

    public function bookings()
    {
        return $this->hasMany('App\Models\BookingList', 'venue_field_id');
    }
}