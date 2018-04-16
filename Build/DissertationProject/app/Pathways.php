<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for pathways
 */
class Pathways extends Authenticatable
{
    use Notifiable;
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */

    protected $fillable = [
        'Pathway',
    ];

    /**
     * pubic function to create a belongs to many relationship to the previous project table
     */
    public function Previous_Projects()
    {
        return $this->belongsToMany('App\Previous_projects');
    }
    /**
     * pubic function to create a belongs to many relationship to the project table
     */
    public function Projects()
    {
        return $this->belongsToMany('App\Projects');
    }
}
