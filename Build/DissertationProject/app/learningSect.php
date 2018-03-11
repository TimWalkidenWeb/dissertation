<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learningSect extends Model
{
    protected $fillable = [
        'title', 'content', 'image',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */



    public function learningMaterial()
    {
        return $this->hasmany('App\Learning_material');
    }

    public function cw()
    {
        return $this->hasmany('App\RelevantCoursework');
    }

    public function learning()
    {
        return $this->belongsToMany('App\Cws');
    }

}
