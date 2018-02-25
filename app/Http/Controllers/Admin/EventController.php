<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	if(! auth()->user()->isAdmin())
    	{
    		abort(403, 'not authorized be an admin first !');
    	}

    	$events = Event::all();

    	return view('admin.events.index', compact('events'));
    }
}
