<?php

use Illuminate\Database\Seeder;

class EventUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('event_user')->delete();
        
        \DB::table('event_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'event_id' => 1,
                'user_id' => 11,
                'code' => 'xrZU4',
                'state' => NULL,
                'created_at' => '2018-03-20 04:05:50',
                'updated_at' => '2018-03-20 04:05:50',
            ),
            1 => 
            array (
                'id' => 11,
                'event_id' => 1,
                'user_id' => 51,
                'code' => 'oe0Kb',
                'state' => NULL,
                'created_at' => '2018-03-20 12:06:35',
                'updated_at' => '2018-03-20 12:06:35',
            ),
            2 => 
            array (
                'id' => 21,
                'event_id' => 1,
                'user_id' => 61,
                'code' => 'pzq6q',
                'state' => NULL,
                'created_at' => '2018-03-20 12:06:59',
                'updated_at' => '2018-03-20 12:06:59',
            ),
            3 => 
            array (
                'id' => 31,
                'event_id' => 1,
                'user_id' => 81,
                'code' => 'JmVfq',
                'state' => NULL,
                'created_at' => '2018-03-20 13:07:26',
                'updated_at' => '2018-03-20 13:07:26',
            ),
            4 => 
            array (
                'id' => 41,
                'event_id' => 1,
                'user_id' => 91,
                'code' => 'jjoOc',
                'state' => NULL,
                'created_at' => '2018-03-20 13:39:10',
                'updated_at' => '2018-03-20 13:39:10',
            ),
            5 => 
            array (
                'id' => 51,
                'event_id' => 1,
                'user_id' => 101,
                'code' => '68ZnJ',
                'state' => NULL,
                'created_at' => '2018-03-20 14:37:51',
                'updated_at' => '2018-03-20 14:37:51',
            ),
            6 => 
            array (
                'id' => 61,
                'event_id' => 1,
                'user_id' => 111,
                'code' => 'FWM2D',
                'state' => NULL,
                'created_at' => '2018-03-20 14:57:31',
                'updated_at' => '2018-03-20 14:57:31',
            ),
            7 => 
            array (
                'id' => 71,
                'event_id' => 1,
                'user_id' => 121,
                'code' => 'HxAg5',
                'state' => NULL,
                'created_at' => '2018-03-20 15:29:44',
                'updated_at' => '2018-03-20 15:29:44',
            ),
        ));
        
        
    }
}