<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Projects extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'staff_id', 'num_participant',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**Projects.php
     * @return array
     */
    public function Project_owner()
    {
        return $this->hasOne('App\User');
    }

    public function Projects()
    {
        return $this->belongsToMany('App\Pathways');
    }
}
