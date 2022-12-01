<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // \App\Models\Admin::factory(10)->create();

        DB::table('admin')->insert([
            'name' => 'Test User',
            'email' => 'test@test',
            'password' =>  bcrypt('password'),
        ]);
    }
}
