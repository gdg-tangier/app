<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
	public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
    	$events = Event::orderBy('scheduled_at', 'desc')->get();

    	return view('admin.events.index', compact('events'));
    }
}
