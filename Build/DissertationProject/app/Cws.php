<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cws extends Model
{
    protected $fillable = [
        'title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */
    public function learningSection()
    {
        return $this->hasmany('App\Learning_sections');
    }
}
