<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    public function child()
    {
        return $this->hasMany('App\child');
    }
}
