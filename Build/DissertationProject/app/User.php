<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'permission', 'update_at', 'created_at', 'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * @return array
     */
    public function Permission()
    {
        return $this->hasOne('App\Permission');
    }

    public function Projectowner()
    {
        return $this->hasMany('App\Projects');
    }

    public function Previousowner()
    {
        return $this->hasMany('App\PreProject');
    }

    public function material()
    {
        return $this->hasMany('App\Learning_material');
    }
}
