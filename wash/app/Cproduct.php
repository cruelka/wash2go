<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Cproduct extends Model
{
    public function product()
    {
        return $this->hasMany('App\Product','category');
    }
}
