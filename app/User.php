<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    public function role()
    {
        return $this->belongsTo('App\Role','role_id','id');
    }
    public function isAdmin(){
        return Auth::user()->role->name =='admin';
    }
    public function profile()
   {
       return $this->hasOne('App\Profil', 'user_id', 'id');
   }
   public function articles()
   {
       return $this->hasMany('App\Article', 'user_id', 'id');
   }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
        protected $hidden = [
        'password', 'remember_token',
        ];

        protected $table ='users';
    }


