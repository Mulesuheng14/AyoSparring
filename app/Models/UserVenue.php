<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVenue extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'user_id', 'venue_name', 'address', 'phone_number', 'photo', 'postal_code', 'nik',
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function field()
    {
        return $this->hasMany('App\User', 'user_venue_id');
    }
}
