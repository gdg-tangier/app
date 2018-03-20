<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('events')->delete();
        
        \DB::table('events')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Kotlin 101: We\'ll be building our first Hello World app',
                'details' => '<p>
We\'ll be building our first Hello World app using Kotlin. <br><br>

Requirements:
<ul>
<li>Android Studio installed</li>
</ul>
</p>',
                'url' => 'https://www.meetup.com/gdgtangier/events/248911718/',
                'assessment' => NULL,
                'invitations_available' => 8,
                'scheduled_at' => '2018-03-24 05:00:00',
            ),
        ));
        
        
    }
}