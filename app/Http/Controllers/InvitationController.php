<?php

namespace App\Http\Controllers;

use App\Event;
use App\Invitation;

class InvitationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Event $event)
    {
        $event->createInvitation(auth()->user());

        return back();
    }

    public function update(Invitation $invitation)
    {
        $this->authorize('update', $invitation);

        $invitation->update([
            'state' => 'cancelled',
        ]);

        return back();
    }
}
