<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
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
            'name' => request('name'),
            'email' => request('email'),
        ]);

        $invitation = $event->createInvitation($user);

        $invitation->update([
            'state' => 'attended',
        ]);

        return redirect(route('admin.events.checkin.index', ['event' => $event->id, 'state' => 'success', 'invitation_code' => $invitation->code]));
    }
}
