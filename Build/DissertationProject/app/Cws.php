<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 *Relationships and fillable for cw table
 */
class Cws extends Model
{
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'title',
    ];

    /**
     * pubic function to create a has many relationship to the learning section table
     */
    public function learningSection()
    {
        return $this->hasmany('App\Learning_sections');
    }
}
