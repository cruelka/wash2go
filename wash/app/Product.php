<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cproduct;
class Product extends Model
{
    public function cats()
    {
        return $this->belongsTo('App\Cproduct' , 'category');
    }
}
