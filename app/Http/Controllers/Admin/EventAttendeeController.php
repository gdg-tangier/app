<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;

class EventAttendeeController extends Controller
{
    public function index(Event $event)
    {
    	return view('admin.events.attendees.index', compact('event'));
    }
}
