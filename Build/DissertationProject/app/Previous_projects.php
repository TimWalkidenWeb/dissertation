<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for previous project
 */
class Previous_projects extends Authenticatable
{
    use Notifiable;
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
    'title', 'content', 'user_id', 'date','description','image'
    ];

    /**
     * pubic function to create a has one relationship to the user table
     */
    public function Previousowner()
    {
        return $this->hasOne('App\User');
    }
    /**
     * pubic function to create a has one relationship to the pathway table
     */
    public function Pathway()
    {
        return $this->belongsToMany('App\Pathways');
    }
}
