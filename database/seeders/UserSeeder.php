<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            // \App\Models\Admin::factory(10)->create();

        DB::table('users')->insert(
            [
            'name' => 'Mr. justUser',
            'email' => 'testuser@test',
            'password' =>  bcrypt('password'),
            ],


            [

                'name' => 'Mr. justUser2',
                'email' => 'test2@test',
                'password' =>  bcrypt('password'),
            ],

            [

                'name' => 'Mr. justUser3',
                'email' => 'test3@test',
                'password' =>  bcrypt('password'),
            ],

            [

                'name' => 'Mr. justUser4',
                'email' => 'test4@test',
                'password' =>  bcrypt('password'),
            ],


            [

                'name' => 'Mr. justUser5',
                'email' => 'test5@test',
                'password' =>  bcrypt('password'),
            ],

            [

                'name' => 'Mr. justUser6',
                'email' => 'test6@test',
                'password' =>  bcrypt('password'),
            ],


    );

    }
    }
}
