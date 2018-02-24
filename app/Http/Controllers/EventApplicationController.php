<?php

namespace App\Http\Controllers;

use App\Event;

class EventApplicationController extends Controller
{
    public function store(Event $event)
    {
    	$event->apply(auth()->user());

    	return back();
    }
}
