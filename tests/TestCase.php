<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response;
use App\Exceptions\Handler;
use Exception;

use App\User;
use App\Event;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class extends Handler {
            public function __construct() {}
            
            public function report(Exception $e)
            {
                // no-op
            }
            
            public function render($request, Exception $e) {
                throw $e;
            }
        });
    }

    /**
     * All helpers
     */ 

    protected function assumingThereIsAnUpcomingEvent()
    {
        return factory(Event::class)->create();
    }

    protected function iCanGetAnInvitationCodeForTheEvent($event)
    {
        $status = $this->json('POST', route('events.invitations.store', $event))->status();

        if($status == Response::HTTP_UNAUTHORIZED)
        {
            return Response::HTTP_UNAUTHORIZED; 
        } 
    
        return $event->getInvitation(auth()->user());
    }

    protected function assumingIamALoggedInUser()
	{
		$user = factory(User::class)->create();

		$this->actingAs($user);

		return $user;
	}

	protected function assumingIamALoggedInAdmin()
	{
		$user = factory(User::class)->create(['role' => 'admin']);

		$this->actingAs($user);

		return $user;
	}
}
