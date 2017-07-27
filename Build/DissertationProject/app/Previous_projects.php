<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Previous_projects extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
    'title', 'content', 'staff_id', 'date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */
    public function Project_owner()
    {
        return $this->hasOne('App\Staff');
    }

    public function Projects()
    {
        return $this->belongsToMany('App\Pathway');
    }
}
