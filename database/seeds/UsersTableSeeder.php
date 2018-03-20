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
                'role' => 'user',
                'phone_number' => NULL,
                'bio' => NULL,
                'skills' => NULL,
                'current_position' => NULL,
                'city' => NULL,
                'birthdate' => NULL,
                'github' => NULL,
                'linkedin' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-02-24 21:46:19',
                'updated_at' => '2018-02-24 21:46:19',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'Souhail M',
                'email' => 'souhail.merroun@hotmail.com',
                'password' => '$2y$10$xvdqPHOaAGu/JZJoG3eNKuRZc3p7bXaiw890iGUB6Ah4e0w4wZHx.',
                'role' => 'admin',
                'phone_number' => '06 25 20 11 61',
                'bio' => 'Hi there, I am born in Tangier. I\'ve been passionate about building apps since high school!',
                'skills' => 'I am good with Laravel.',
                'current_position' => 'Working in Casablanca at OSP S.A and studying Computer Science at Uopeople',
                'city' => 'Tangier',
                'birthdate' => '1996-05-23 00:00:00',
                'github' => 'https://github.com/souhailmerroun',
                'linkedin' => 'https://www.linkedin.com/in/souhailmerroun/',
                'facebook' => NULL,
                'twitter' => 'https://twitter.com/SouhailMerroun',
                'remember_token' => 'hTtHp5aooArIEvV5FZWBqVOknVKOSixqFH6bYVIOggScTE4eRXtTpOEyexzC',
                'created_at' => '2018-02-24 23:43:26',
                'updated_at' => '2018-02-24 23:45:47',
            ),
            2 => 
            array (
                'id' => 21,
                'name' => 'Amrani',
                'email' => 'amrani@amrani.amrani',
                'password' => '$2y$10$2gXdiit5kr7UjEK5fuoL4Odd74mlApgD2rsEm31UuPO3E6QLSTFVq',
                'role' => 'admin',
                'phone_number' => NULL,
                'bio' => NULL,
                'skills' => NULL,
                'current_position' => NULL,
                'city' => NULL,
                'birthdate' => NULL,
                'github' => NULL,
                'linkedin' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-02-24 23:49:36',
                'updated_at' => '2018-02-24 23:49:36',
            ),
            3 => 
            array (
                'id' => 31,
                'name' => 'Abdellah Chadidi',
                'email' => 'chadidi97@gmail.com',
                'password' => '$2y$10$0yey1w75WUqxoExmf4KR2.ai10epv0Tjq./Eo98h6V.agBoMjOpsG',
                'role' => 'user',
                'phone_number' => NULL,
                'bio' => NULL,
                'skills' => NULL,
                'current_position' => NULL,
                'city' => NULL,
                'birthdate' => NULL,
                'github' => NULL,
                'linkedin' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-02-26 20:05:41',
                'updated_at' => '2018-02-26 20:05:41',
            ),
            4 => 
            array (
                'id' => 41,
                'name' => 'Nourelhouda',
                'email' => 'Nourelhouda.el@gmail.com',
                'password' => '$2y$10$gAOIUzs76MjVloE6Z2Hm3.DLtvXWlj.RBLU7D6QhODHtrDFSQfpGu',
                'role' => 'user',
                'phone_number' => NULL,
                'bio' => NULL,
                'skills' => NULL,
                'current_position' => NULL,
                'city' => NULL,
                'birthdate' => NULL,
                'github' => NULL,
                'linkedin' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-02-27 16:19:39',
                'updated_at' => '2018-02-27 16:19:39',
            ),
            5 => 
            array (
                'id' => 42,
                'name' => 'John Doe',
                'email' => 'johndoe@email.com',
                'password' => '$2y$10$jFq.0JovZ9uUgeBvcC3yLuBZ/U2m.L9OvbvCMWDnwxroI5CKVP/IO',
                'role' => 'user',
                'phone_number' => NULL,
                'bio' => NULL,
                'skills' => NULL,
                'current_position' => NULL,
                'city' => NULL,
                'birthdate' => NULL,
                'github' => NULL,
                'linkedin' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'remember_token' => NULL,
                'created_at' => '2018-03-20 03:27:10',
                'updated_at' => '2018-03-20 03:27:10',
            ),
        ));
        
        
    }
}