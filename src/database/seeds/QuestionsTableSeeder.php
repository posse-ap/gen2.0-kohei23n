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
            'hide' => 0,
            'sortID' => 1,
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'kameido.png',
            'hide' => 0,
            'sortID' => 2,
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 1,
            'image' => 'kojimachi.png',
            'hide' => 0,
            'sortID' => 3,
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'mukainada.png',
            'hide' => 0,
            'sortID' => 1,
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'mitsugi.png',
            'hide' => 0,
            'sortID' => 2,
        ];
        DB::table('questions')->insert($param);

        $param = [
            'big_question_id' => 2,
            'image' => 'kanayama.png',
            'hide' => 0,
            'sortID' => 3,
        ];
        DB::table('questions')->insert($param);
    }
}
