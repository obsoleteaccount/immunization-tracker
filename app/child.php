<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    protected $fillable = ['firstname','lastname','surname','gender','dob'];
    
    public function immunization()
    {
        return $this->hasOne('App\Immunization');
    }

    public function parents()
    {
        return $this->belongsTo('App\parents', 'parent_id');
    }
}


