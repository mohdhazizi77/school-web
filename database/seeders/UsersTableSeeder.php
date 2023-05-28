<?php

namespace Database\Seeders;

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
                'name' => 'MOHD HAZIZI',
                'email' => 'mohdhaziziak@gmail.com',
                'email_verified_at' => '2022-01-01 00:00:00',
                'password' => '$2y$10$sUoW6vbIM8dVzrShqe0ZYulpS5D6TBVnRJpYrrB5qnnakNRuJyEEy',
                'remember_token' => NULL,
                'created_at' => '2022-01-01 00:00:00',
                'updated_at' => NULL,
            ),
        ));


    }
}
