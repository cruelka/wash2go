<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = [
        'user_id', 'service', 'price','location','date','time','status','marks','email','phone','user_name'
    ];

}
