<?php

namespace App\Traits;

use App\User;
use App\Invitation;

trait Invitationable
{
	//Tested
    public function attendees()
    {
        return $this->belongsToMany(User::class)
                    ->as('invitation')
                    ->withPivot(['code', 'state'])
                    ->withTimestamps();
    }

    //Tested
    public function createInvitation(User $user)
    {
        return $this->attendees()->attach($user, [
            'code' => $this->generateInvitationCode()
        ]);
    }

    //Tested
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

    //Tested
    public function getInvitation(User $user)
    {
        return Invitation::where('user_id', $user->id)->where('event_id', $this->id)->first();
    }
}