<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = ['firstname','lastname','surname','gender','phone','email','county'];

    public function parent()
    {
        return $this->hasMany('App\parent');
    }
}
