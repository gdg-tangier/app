<?php

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{
    public function apply(Event $event)
    {
    	return view('events.apply', compact('event'));
    }
}
