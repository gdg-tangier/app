<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

use App\Event;

$factory->define(Event::class, function (Faker $faker) {

    return [
    	'title' 				=> $faker->sentence,
        'url'					=> $faker->url,
        'invitations_available' => 10,
        'scheduled_at' 			=> Carbon::tomorrow()->setTimeFromTimeString('17:00')
    ];
});
