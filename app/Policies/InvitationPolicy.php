<?php

namespace App\Policies;

use App\User;
use App\Invitation;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvitationPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Invitation $invitation)
    {
        return $user->id == $invitation->user_id;
    }
}
