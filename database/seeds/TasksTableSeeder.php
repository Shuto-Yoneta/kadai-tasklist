<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 2; $i <= 25; $i++) {
            DB::table('tasks')->insert([
                // 'status' => '実施中 ' . $i,
                'status' => '実施済 ',
                'content' => '動作確認テスト ' . $i
            ]);
        }
    }
}
