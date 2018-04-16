<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for user
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'name', 'email', 'password', 'permission', 'update_at', 'created_at', 'remember_token'
    ];

    /**
     * the following section details which input needs to be hidden
     */
    protected $hidden = [
        'password',
    ];

    /**
     * pubic function to create a has one relationship to the permission table
     */
    public function Permission()
    {
        return $this->hasOne('App\Permission');
    }

    /**
     * pubic function to create a has many relationship to the projects table
     */

    public function Projectowner()
    {
        return $this->hasMany('App\Projects');
    }
    /**
     * pubic function to create a has many relationship to the previous project table
     */

    public function Previousowner()
    {
        return $this->hasMany('App\PreProject');
    }

    /**
     * pubic function to create a has many relationship to the learning material table
     */
    public function material()
    {
        return $this->hasMany('App\Learning_material');
    }
}
