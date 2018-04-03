<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Event;
use App\Invitation;

class EventCheckInController extends Controller
{
    public function index(Event $event)
    {
    	return view('admin.events.check-in.index', compact('event'));
    }

    public function update(Event $event)
    {
    	$invitation = Invitation::where('event_id', $event->id)->where('code', request('invitation_code'))->first();

    	if(empty($invitation))
    	{
    		return redirect(route('admin.events.checkin.index', ['event' => $event->id, 'state' => 'not-found']));
    	}
    	else
    	{
    		$invitation->update([
    			'state' => 'attended'
    		]);

    		return redirect(route('admin.events.checkin.index', ['event' => $event->id, 'state' => 'success']));
    	}
    }
}
