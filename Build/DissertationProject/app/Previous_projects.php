<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Previous_projects extends Authenticatable
{
    use Notifiable;

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
