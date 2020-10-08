<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparringRequest extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'user_id', 'booking_list_id', 'is_accepted',
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function booking()
    {
        return $this->belongsTo('App\BookingList', 'booking_list_id');
    }
}
