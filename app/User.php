<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    //use HasPermissionsTrait; //Import The Trait
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','university','country'
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
    public function roles() {
        return $this->belongsToMany('App\Roles', 'user_roles', 'user_id', 'role_id');
    }
    public function orders() {
        return $this->hasMany('App\Orders', 'user_id');
    }
    public function isAdmin()
    {
    return $this->roles()->where('role_id', 1)->first();
    }
    public function isUser()
    {
    return $this->roles()->where('role_id', 2)->first();
    }
}