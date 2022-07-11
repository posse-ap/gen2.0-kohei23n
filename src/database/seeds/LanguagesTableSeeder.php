<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert(
            [
                ['language' => 'HTML',
                'colour' => '#0445ec',
                ],
                ['language' => 'CSS',
                'colour' => '#0f70bd',
                ],
                ['language' => 'SQL',
                'colour' => '#20bdde',
                ],
                ['language' => 'SHELL',
                'colour' => '#3ccefe',
                ],
                ['language' => 'Javascript',
                'colour' => '#b29ef3',
                ],
                ['language' => 'PHP',
                'colour' => '#4a17ef',
                ],
                ['language' => 'Laravel',
                'colour' => '#3005c0',
                ],
                ['language' => 'その他',
                'colour' => '#6c46eb',
                ],
            ]    
            );
    }
}
