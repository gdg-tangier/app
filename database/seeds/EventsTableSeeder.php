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
                'title' => 'Cloud Study Jam',
                'url' => 'https://www.meetup.com/gdgtangier/events/247094455',
                'assessment' => NULL,
                'invitations_available' => 20,
                'scheduled_at' => '2018-02-24 16:00:00',
            ),
        ));
        
        
    }
}