<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 *Relationships and fillable for previous project
 */
class PreProject extends Model
{
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'title', 'content', 'user_id', 'date','description','image'
    ];

    /**
     * pubic function to create a has one relationship to the previous owner table
     */
    public function Previousowner()
    {
        return $this->hasOne('App\User');
    }

    /**
     * pubic function to create belongs to many relationship to the pathway table
     */
    public function Projects()
    {
        return $this->belongsToMany('App\Pathways');
    }
}
