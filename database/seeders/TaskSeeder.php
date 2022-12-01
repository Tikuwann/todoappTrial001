<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
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

        DB::table('tasks')->insert(
            [
            'user_id' => 1,
            'task_name' => 'work',
            'task_date' => '2022/10/22',
            'task_info' => 'The first information for the first taskk',

            ],

            [
                'user_id' => 2,
                'task_name' => 'working',
                'task_date' => '2022/10/22',
                'task_info' => 'The second information for the second taskk',

            ]
            // $table->foreignId('user_id')->constrained;
            // $table->string('task_name');
            // $table->date('task_date')->nullable(NULL)->change();
            // $table->text('task_info')->nullable(true)->change();
            // $table->timestamps();





    );

    }
    }
}
