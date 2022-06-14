<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BigQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ガチで東京の人しか解けない！＃東京の難読地名クイズ',
        ];
        DB::table('bigquestions')->insert($param);

        $param = [
            'name' => '広島県民なら解けて当然？＃広島の難読地名クイズ',
        ];
        DB::table('bigquestions')->insert($param);
    }
}
