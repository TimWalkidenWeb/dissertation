<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Learning_section extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Learning_section',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */

    public function Staff()
    {
        return $this->belongsToMany('App\Staff');
    }
}
