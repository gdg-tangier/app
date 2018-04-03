<?php

namespace App\Http\Controllers;

use App\Invitation;
use App\Event;

class InvitationController extends Controller
{
    //Tested
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    //Tested
	public function store(Event $event)
    {
    	$event->createInvitation(auth()->user());

    	return back();
    }

    //Tested
    public function update(Invitation $invitation)
    {
    	$invitation->update([
    		'state' => 'cancelled'
    	]);

    	return back();
    }
}
