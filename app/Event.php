<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    protected $dates = ['scheduled_at'];

    public $timestamps = false;

    public function users()
    {
    	return $this->belongsToMany(User::class)
                    ->as('invitation')
                    ->withPivot(['code'])
                    ->withTimestamps();
    }

    public function generateCode($length = 5)
    {
        $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));

        $key = null;

        for($i=0; $i < $length; $i++) 
        {
            $key .= $pool[mt_rand(0, count($pool) - 1)];
        }

        return $key;
    }

    public function apply(User $user)
    {
        return $this->users()->attach($user, [
            'code'    => $this->generateCode()
        ]);
    }

    public function applied(User $user)
    {
    	return $this->users()->where('user_id', $user->id)->first();
    }
}
