<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Invitationable;

class Event extends Model
{
    use Invitationable;

    protected $guarded = [];

    protected $dates = ['scheduled_at'];

    public $timestamps = false;

    public function hasInvitation(User $user)
    {
        return Invitation::whereNull('state')->where('user_id', $user->id)->where('event_id', $this->id)->exists();
    }

    public function getInvitationsCountAttribute()
    {
        return Invitation::whereNull('state')->where('event_id', $this->id)->count();
    }
}
