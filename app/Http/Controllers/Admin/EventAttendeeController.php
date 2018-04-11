<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use App\User;

class EventAttendeeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->only(['index']);
    }

    public function index(Event $event)
    {
    	return view('admin.events.attendees.index', compact('event'));
    }

    public function store(Event $event)
    {
    	$user = User::create([
    		'name' 	=> request('name'),
    		'email' => request('email')
    	]);

    	$invitation = $event->createInvitation($user);

    	return redirect(route('admin.events.checkin.update', ['event_id' => $event->id, 'state' => 'success', 'invitation_code' => $invitation->id]));
    }
}
