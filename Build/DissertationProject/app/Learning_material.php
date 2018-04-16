<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for learning material
 */
class Learning_material extends Authenticatable
{
    use Notifiable;
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'Title', 'content', 'staff_id', 'learning_section_id',
    ];

    /**
     * pubic function to create a has one relationship to the user table
     */
    public function Lecture()
    {
        return $this->hasOne('App\User');
    }
    /**
     * pubic function to create a has one relationship to the learning section table
     */
    public function Projects()
    {
        return $this->hasOne('App\Learning_section');
    }
}
