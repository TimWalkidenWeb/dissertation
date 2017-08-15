<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pathways_Previous_Projects extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'previous_projects_id', 'pathways_id'
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
        return $this->hasOne('App\Project');
    }

    public function Projects()
    {
        return $this->hasOne('App\Pathway');
    }
}
