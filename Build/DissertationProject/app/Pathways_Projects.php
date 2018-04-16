<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for pathways_projects
 */
class Pathways_Projects extends Authenticatable
{

    use Notifiable;

    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */

    protected $fillable = [
        'projects_id', 'pathways_id'
    ];

    /**
     * pubic function to create a has one relationship to the projects table
     */
    public function Project_owner()
    {
        return $this->hasOne('App\Project');
    }

    /**
     * pubic function to create a has one relationship to the pathway table
     */
    public function Projects()
    {
        return $this->hasOne('App\Pathway');
    }
}
