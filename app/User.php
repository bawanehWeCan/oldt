<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;


class User extends Authenticatable
{
    use Notifiable;
    public $table = 'tk_users';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'image', 'provider', 'provider_id', 'password','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rates()
    {
        return $this->hasMany('App\Rate','user_id')->latest()->paginate(5);
    }

    public function getRates()
    {
        return $this->hasMany('App\Rate','user_id')->get();
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification','user_id')->latest()->paginate(20);
    }
    
    public function avgRating()
    {
        return ( $this->getRates()->avg('avg') >0 ) ? $this->getRates()->avg('avg') : 0;
    }

    public function countRating()
    {
        return count($this->getRates());
    }
}
