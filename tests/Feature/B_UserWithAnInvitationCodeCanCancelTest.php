<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Symfony\Component\HttpFoundation\Response;

class B_UserWithAnInvitationCodeCanCancelTest extends TestCase
{
	use RefreshDatabase;

    /**
	 * Requires Authentification: Yes
	 */

	public function test_require_authentification()
    {
    	$response = $this->iCanCancelMyInvitation(1);

    	$this->assertEquals(Response::HTTP_UNAUTHORIZED, $response);
    }

    /**
	 * Requires a particular authorization: Yes
	 */

    public function test_only_owning_users_allowed()
    {
    	$event = $this->assumingThereIsAnUpcomingEvent();

    	$user  = $this->assumingIamALoggedInUser();

    	$invitation = $this->iCanGetAnInvitationCodeForTheEvent($event);

    	$anotherUser = $this->assumingIamALoggedInUser();

    	$response = $this->iCanCancelMyInvitation($invitation);

    	$this->assertEquals(Response::HTTP_FORBIDDEN, $response);
    }

    /**
     * Use case
     */

    public function test_a_user_with_an_invitation_code_can_cancel()
    {
    	$invitation = $this->assumingIamLoggedInAndAlreadyHaveMyInvitationForAnEvent();

    	$this->iCanCancelMyInvitation($invitation);

    	$this->myInvitationForTheEventShouldBeCancelled($invitation);
    }

    /**
     * Helpers
     */

	private function assumingIamLoggedInAndAlreadyHaveMyInvitationForAnEvent()
	{
		$event = $this->assumingThereIsAnUpcomingEvent();

    	$user  = $this->assumingIamALoggedInUser();

    	return $this->iCanGetAnInvitationCodeForTheEvent($event);
	}

	private function iCanCancelMyInvitation($invitation)
	{
		return $this->json('PATCH', route('invitations.update', $invitation))->status();
	}

	private function myInvitationForTheEventShouldBeCancelled($invitation)
	{
		$this->assertDatabaseHas('event_user', [
			'id'		=> $invitation->id,
			'user_id' 	=> auth()->id(),
			'state'		=> 'cancelled'
		]);
	}	
}
