<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use App\Invitation;

class EventCheckInController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin'])->only(['index']);
    }

    public function index(Event $event)
    {
        if (!$event->scheduled_at->isToday()) {
            abort(403, 'You can only access this action at the scheduled date.');
        }

        $invitation = Invitation::where('event_id', $event->id)->where('code', request('invitation_code'))->first();

        return view('admin.events.check-in.index', compact('event', 'invitation'));
    }

    public function update(Event $event)
    {
        $invitation = Invitation::where('event_id', $event->id)->where('code', request('invitation_code'))->first();

        if (empty($invitation)) {
            return redirect(route('admin.events.checkin.index', ['event' => $event->id, 'state' => 'not-found', 'invitation_code' => request('invitation_code')]));
        } else {
            $invitation->update([
                'state' => 'attended',
            ]);

            return redirect(route('admin.events.checkin.index', ['event' => $event->id, 'state' => 'success', 'invitation_code' => request('invitation_code')]));
        }
    }
}
