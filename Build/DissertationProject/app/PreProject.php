<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreProject extends Model
{
    protected $fillable = [
        'title', 'content', 'user_id', 'date','description','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */
    public function Previousowner()
    {
        return $this->hasOne('App\User');
    }

    public function Pathway()
    {
        return $this->belongsToMany('App\Pathways');
    }
}
