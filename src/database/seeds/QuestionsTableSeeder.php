<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'big_question_id' => 1,
            'image' => 'takanawa.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'kameido.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'kojimachi.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'mukainada.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'mitsugi.png',
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'kanayama.png',
        ];
        DB::table('questions')->insert($param);
    }
}
