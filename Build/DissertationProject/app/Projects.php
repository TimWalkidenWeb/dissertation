<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for project
 */
class Projects extends Authenticatable
{
    use Notifiable;

    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'title', 'content', 'user_id', 'num_participant', 'image',
    ];

    /**
     * pubic function to create a has one relationship to the user table
     */
    public function Projectowner()
    {
        return $this->hasOne('App\User');
    }

    /**
     * pubic function to create a has one relationship to the pathways table
     */

    public function Projects()
    {
        return $this->belongsToMany('App\Pathways');
    }
}
