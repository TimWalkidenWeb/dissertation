<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Previous_projects extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
    'title', 'content', 'user_id', 'date','description',
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

    public function Projects()
    {
        return $this->belongsToMany('App\Pathways');
    }
}
