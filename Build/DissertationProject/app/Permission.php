<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 *Relationships and fillable for permission
 */
class Permission extends Authenticatable
{
    use Notifiable;
    /**
     * the following section of code is used to outline which columns in the table can be filled in by the user
     */
    protected $fillable = [
        'permission',
    ];

    /**
     * pubic function to create a belong to may relationship to the staff table
     */

    public function Staff()
    {
        return $this->belongsToMany('App\Staff');
    }
}
