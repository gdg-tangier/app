<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@email.com',
                'password' => '$2y$10$kTuo5IF.kmfgPgtA75lV/.ejdECoRbJZGqmLVsfl6f25bxzpDOQ.6',
                'remember_token' => NULL,
                'created_at' => '2018-02-24 21:46:19',
                'updated_at' => '2018-02-24 21:46:19',
            ),
        ));
        
        
    }
}