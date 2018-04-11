<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;

use App\Event;
use App\User;

class A_UserCanGetAnInvitationCodeForAnUpcomingEventTest extends TestCase
{
	use RefreshDatabase;

	/**
	 * Requires Authentification: Yes
	 */

	public function test_require_authentification()
    {
    	$event = $this->assumingThereIsAnUpcomingEvent();

    	$response = $this->iCanGetAnInvitationCodeForTheEvent($event);

    	$this->assertEquals(Response::HTTP_UNAUTHORIZED, $response);
    }

	/**
	 * Requires a particular role: No
	 */

	//

	/**
	 * Use Case
	 */

	public function test_a_user_can_get_an_invitation_code_for_an_upcoming_event_test()
    {
    	$event = $this->assumingThereIsAnUpcomingEvent();

    	$user  = $this->assumingIamALoggedInUser();

    	$invitation = $this->iCanGetAnInvitationCodeForTheEvent($event);

    	$this->IshouldHaveAnInvitationCode($event, $invitation);
    }

    /** 
     * Helpers
     */

	private function IshouldHaveAnInvitationCode($event, $invitation)
	{
		$this->assertDatabaseHas('event_user', [
			'user_id' 	=> auth()->id(),
			'event_id' 	=> $event->id,
			'code'		=> $invitation->code,
			'state'		=> null
		]);
	}
}
