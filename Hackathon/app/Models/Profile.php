<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';

    protected $primaryKey = "user_id";

    // protected $hidden = ['id'];

    // public function reservations()
    // {
    //     return $this -> hasMany('App\ModelReservation');
    // }
    
}
