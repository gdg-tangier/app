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
                    ->withPivot(['code', 'state'])
                    ->withTimestamps();
    }

    public function getInvitation(User $user)
    {
        return Invitation::whereNull('state')->where('user_id', $user->id)->where('event_id', $this->id)->first();
    }

    public function generateInvitationCode($length = 5)
    {
        $pool = array_merge(range(0,9), range('a', 'z'),range('A', 'Z'));

        $key = null;

        for($i=0; $i < $length; $i++) 
        {
            $key .= $pool[mt_rand(0, count($pool) - 1)];
        }

        return $key;
    }

    public function createInvitation(User $user)
    {
        return $this->users()->attach($user, [
            'code'    => $this->generateInvitationCode()
        ]);
    }

    public function hasInvitation(User $user)
    {
        return Invitation::whereNull('state')->where('user_id', $user->id)->where('event_id', $this->id)->exists();
    }
}
