<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'booking_list_id', 'user_reporter_id', 'user_reported_id', 'object_type', 'review_type', 'comment',
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];

    public function reporter()
    {
        return $this->belongsTo('App\User', 'user_reporter_id');
    }

    public function reported()
    {
        return $this->belongsTo('App\User', 'user_reported_id');
    }

    public function booking()
    {
        return $this->belongsTo('App\BookingList', 'booking_list_id');
    }
}
