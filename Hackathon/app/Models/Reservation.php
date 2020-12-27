<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'reservations';

    // public function profile()
    // {
    //     return $this -> belongsTo('App\Model\Profile','guest_id','id');
    // }

}
