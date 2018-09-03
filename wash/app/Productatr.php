<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Attrs;
use App\Product;

class Productatr extends Model
{
    public function attr()
    {
        return $this->HasOne('App\Attrs');

    }
    public function product()
    {
        return $this->HasOne('App\Product');

    }
}
