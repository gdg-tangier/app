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
                'code' => 'SzxNl',
                'created_at' => '2018-02-24 23:46:22',
                'updated_at' => '2018-02-24 23:46:22',
            ),
            1 => 
            array (
                'id' => 11,
                'event_id' => 1,
                'user_id' => 21,
                'code' => 'yUPpF',
                'created_at' => '2018-02-24 23:50:02',
                'updated_at' => '2018-02-24 23:50:02',
            ),
        ));
        
        
    }
}