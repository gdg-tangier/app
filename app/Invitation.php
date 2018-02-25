<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table = 'event_user';

    protected $guarded = [];
}
