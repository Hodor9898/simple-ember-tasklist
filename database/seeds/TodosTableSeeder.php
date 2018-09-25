<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => 'משימה A',
            'status' => \App\Todo::STATUS_COMPLETE
        ]);

        DB::table('todos')->insert([
            'title' => 'משימה B',
            'status' => \App\Todo::STATUS_INCOMPLETE
        ]);

        DB::table('todos')->insert([
            'title' => 'משימה C',
            'status' => \App\Todo::STATUS_INCOMPLETE
        ]);

        DB::table('todos')->insert([
            'title' => 'משימה D',
            'status' => \App\Todo::STATUS_INCOMPLETE
        ]);

        DB::table('todos')->insert([
            'title' => 'משימה E',
            'status' => \App\Todo::STATUS_COMPLETE
        ]);

        DB::table('todos')->insert([
            'title' => 'משימה F',
            'status' => \App\Todo::STATUS_INCOMPLETE
        ]);
    }
}
