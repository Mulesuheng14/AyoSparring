<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $fillable = [
        'user_id', 'team_name', 'category', 'date_established', 'address', 'photo', 'postal_code', 'bio', 
        'flag_active', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
