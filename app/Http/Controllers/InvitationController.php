<?php

namespace App\Http\Controllers;

use App\Invitation;
use App\Event;

class InvitationController extends Controller
{
    public function create(Event $event)
    {
        return view('events.invitations.create', compact('event'));
    }

	public function store(Event $event)
    {
    	$event->createInvitation(auth()->user());

    	return back();
    }

    public function update(Invitation $invitation)
    {
    	$invitation->update([
    		'state' => 'cancelled'
    	]);

    	return redirect('/home');
    }
}
