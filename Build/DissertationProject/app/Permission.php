<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Permission extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'permission',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */

    public function Staff()
    {
        return $this->belongsToMany('App\Staff');
    }
}
