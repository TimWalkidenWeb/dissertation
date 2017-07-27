<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Learning_material extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'staff_id', 'learning_section',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */
    public function Project_owner()
    {
        return $this->hasOne('App\staff');
    }

    public function Projects()
    {
        return $this->hasOne('App\Learning_section');
    }
}
