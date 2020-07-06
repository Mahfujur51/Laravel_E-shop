<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distric extends Model
{
    public function division()
    {
        return $this->belongsTo('App\Division');
    }
}
