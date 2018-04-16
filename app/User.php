<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * Check if user is admin.
     * @return boolean
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }
}
