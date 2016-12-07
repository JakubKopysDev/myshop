<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function file() {
        return $this->belongsTo('App\Fileentry');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
