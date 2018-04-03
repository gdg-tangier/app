<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;

use App\Event;
use App\User;

class A_UsersCanGetTicketsForAnEventTest extends TestCase
{
	use RefreshDatabase;

	private function assumingThereIsAnUpcomingEvent()
	{
		return factory(Event::class)->create();
	}

	private function assumingIamALoggedInUser()
	{
		$user = factory(User::class)->create();

		$this->actingAs($user);

		return $user;
	}

	private function iCanGetAnInvitationCodeForTheEvent($event)
	{
		$status = $this->json('POST', route('events.invitations.store', $event))->status();

		if($status == Response::HTTP_UNAUTHORIZED)
		{
			return Response::HTTP_UNAUTHORIZED;	
		} 
	
		return $event->getInvitation(auth()->user());
	}

	private function IshouldHaveAnInvitationCode($event, $invitation)
	{
		$this->assertDatabaseHas('event_user', [
			'user_id' 	=> auth()->id(),
			'event_id' 	=> $event->id,
			'code'		=> $invitation->code,
			'state'		=> null
		]);
	}

	private function iShoulndHaveAnInvitationCodeForTheEvent($event)
	{
		$this->assertDatabaseMissing('event_user', [
			'user_id' 	=> auth()->id(),
			'event_id' 	=> $event->id
		]);
	}

	private function assumingIamLoggedInAndAlreadyHaveMyInvitationForAnEvent()
	{
		$event = $this->assumingThereIsAnUpcomingEvent();

    	$user  = $this->assumingIamALoggedInUser();

    	return $this->iCanGetAnInvitationCodeForTheEvent($event);
	}

	private function iCanCancelMyInvitation($invitation)
	{
		$this->json('PATCH', route('invitations.update', $invitation));
	}

	private function myInvitationForTheEventShouldBeCancelled($invitation)
	{
		$this->assertDatabaseHas('event_user', [
			'id'		=> $invitation->id,
			'user_id' 	=> auth()->id(),
			'state'		=> 'cancelled'
		]);
	}	

    public function test_A_a_logged_in_user_can_get_an_invitation_code_for_an_event()
    {
    	$event = $this->assumingThereIsAnUpcomingEvent();

    	$user  = $this->assumingIamALoggedInUser();

    	$invitation = $this->iCanGetAnInvitationCodeForTheEvent($event);

    	$this->IshouldHaveAnInvitationCode($event, $invitation);
    }

    public function test_B_unlogged_users_cant_get_an_invitation_for_an_event()
    {
    	$event = $this->assumingThereIsAnUpcomingEvent();

    	$response = $this->iCanGetAnInvitationCodeForTheEvent($event);

    	$this->assertEquals(Response::HTTP_UNAUTHORIZED, $response);

    	$this->iShoulndHaveAnInvitationCodeForTheEvent($event);
    }

    public function test_C_logged_users_can_cancel_an_invitation_if_they_already_have_one()
    {
    	$invitation = $this->assumingIamLoggedInAndAlreadyHaveMyInvitationForAnEvent();

    	$this->iCanCancelMyInvitation($invitation);

    	$this->myInvitationForTheEventShouldBeCancelled($invitation);
    }
}
