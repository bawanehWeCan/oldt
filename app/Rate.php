<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public $table = 'tk_rates';
    public function isAnonymous(){
        return $this->anonymous;
    }

    public function sendBy()
    {
        return $this->belongsTo('App\User', 'by_id')->first()->name;
    }
    public function sendByUsername()
    {
        return $this->belongsTo('App\User', 'by_id')->first()->username;
    }
    public function points()
    {
        return $this->hasMany('App\Point','rate_id')->get();
    }
    public function comments()
    {
        return $this->hasMany('App\Comment','rate_id')->get();
    }

}
