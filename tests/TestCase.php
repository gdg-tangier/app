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
}
