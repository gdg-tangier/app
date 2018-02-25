<?php

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function apply(Event $event)
    {
    	return view('events.apply', compact('event'));
    }
}
