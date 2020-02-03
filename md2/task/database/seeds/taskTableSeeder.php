<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class taskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('tasks')->insert([
                'title' => 'test' . Str::random(2),
                'content' => Str::random(10),
                'due_date' => date('Y-m-d', mt_rand(1,time()))
            ]);
        }
    }
}
