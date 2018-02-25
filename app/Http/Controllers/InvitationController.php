<?php

namespace App\Http\Controllers;

use App\Invitation;

class InvitationController extends Controller
{
    public function update(Invitation $invitation)
    {
    	$invitation->update([
    		'state' => 'cancelled'
    	]);

    	return back();
    }
}
