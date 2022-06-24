<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert(
            [
                ['content' => 'N予備校',
                'colour' => '#0445ec',
                ],
                ['language' => '課題',
                'colour' => '#0f70bd',
                ],
                ['language' => 'ドットインストール',
                'colour' => '#20bdde',
                ],
            ]    
        );
    }
}
