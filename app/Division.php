<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public function districs(){
        return $this->hasMany('App\Distric');
    }
}
