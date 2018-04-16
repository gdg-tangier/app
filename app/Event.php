<?php

namespace App;

use App\Traits\Invitationable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use Invitationable;

    /**
     * @var array $guarded
     */
    protected $guarded = [];

    /**
     * @var array $dates
     */
    protected $dates = ['scheduled_at'];

    /**
     * @var $timestamps
     */
    public $timestamps = false;

    /**
     * check if a given user has an invitation.
     *
     * @param \App\User $user
     * @return boolean
     */
    public function hasInvitation(User $user)
    {
        return Invitation::whereNull('state')->where('user_id', $user->id)->where('event_id', $this->id)->exists();
    }

    /**
     * Get Invitations Count.
     * @return int
     */
    public function getInvitationsCountAttribute()
    {
        return Invitation::whereNull('state')->where('event_id', $this->id)->count();
    }
}
