<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Symfony\Component\HttpFoundation\Response;

use Carbon\Carbon;
use App\Event;

class C_AdminCanCheckInInvitationsCodeForAnEventTest extends TestCase
{
	use RefreshDatabase;

    /**
     * Requires Authentification: Yes
     */

    public function test_require_authentification()
    {
        $event = $this->assumingThereIsAnEventToday();

        $response = $this->iCanAccessCheckInPage($event);

        $this->assertEquals(Response::HTTP_UNAUTHORIZED, $response);    
    }

    /**
     * Requires a particular authorization: Yes
     */

    public function test_users_not_allowed()
    {
        $event = $this->assumingThereIsAnEventToday();

        $this->assumingIamALoggedInUser();

        $response = $this->iCanAccessCheckInPage($event);

        $this->assertEquals(Response::HTTP_FORBIDDEN, $response);
    }

    public function test_check_in_only_at_the_day_of_the_event()
    {
        $this->assumingIamALoggedInAdmin();

        $event = $this->assumingThereIsAnEventToday();

        $response = $this->iCanAccessCheckInPage($event);

        $this->assertEquals(Response::HTTP_OK, $response);

        //

        $event = $this->assumingThereIsAnUpcomingEvent();

        $response = $this->iCanAccessCheckInPage($event);

        $this->assertEquals(Response::HTTP_FORBIDDEN, $response);
    }

	/**
	 * Use Case
	 */

    public function test_admin_can_test_a_valid_invitation_code_for_the_event()
    {
        //TODO
    }

    public function test_admin_can_test_an_invalid_invitation_code_for_the_event()
    {
        //TODO
    }

    /** 
     * Helpers
     */

	private function assumingThereIsAnEventToday()
	{
		return factory(Event::class)->create(['scheduled_at' => Carbon::today()]);
	}

    private function iCanAccessCheckInPage($event)
    {
        return $this->json('GET', route('admin.events.checkin.index', $event))->status();
    }
}
