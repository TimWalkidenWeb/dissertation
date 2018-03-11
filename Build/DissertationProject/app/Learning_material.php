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
        'Title', 'content', 'staff_id', 'learning_section_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */


    /**
     * @return array
     */
    public function Lecture()
    {
        return $this->hasOne('App\User');
    }

    public function Projects()
    {
        return $this->hasOne('App\Learning_section');
    }
}
