<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 *Relationships and fillable for learning section
 */
class learningSect extends Model
{
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'title', 'content', 'image',
    ];



    /**
     * pubic function to create a has many relationship to the learning material table
     */
    public function learningMaterial()
    {
        return $this->hasmany('App\Learning_material');
    }

    /**
     * pubic function to create a has many relationship to the coursework table
     */
    public function cw()
    {
        return $this->hasmany('App\RelevantCoursework');
    }

    /**
     * pubic function to create a belong to many relationship to the coursework table
     */

    public function learning()
    {
        return $this->belongsToMany('App\Cws');
    }

}
