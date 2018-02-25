<?php

namespace App\Http\Controllers;

use App\Event;

class EventApplicationController extends Controller
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
}
