<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public $table = 'tk_notifications';
    public function sendBy()
    {
        return $this->belongsTo('App\User', 'by_id')->first()->name;
    }

    public function sendByUser()
    {
        return $this->belongsTo('App\User', 'by_id')->first()->username;
    }
    public function isAnonymous(){
        return $this->anonymous;
    }

    public function sender(){
        if($this->isAnonymous()){
            return 'مجهول';
        }else{
            return '<a href="'.url('/u').'/'.$this->sendByUser().'">'.$this->sendBy().'</a>';
        }
    }

    

    public function senderName(){
        if($this->isAnonymous()){
            return 'مجهول';
        }else{
            return $this->sendBy();
        }
    }


}
