<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert(
        [
            // 東京 no1 
            ['question_id' => 1,
            'name' => 'たかなわ',
            'valid' => 1,
            'hide' => 0,
            ],
            ['question_id' => 1,
            'name' => 'たかわ',
            'valid' => 0,
            'hide' => 0,
            ],
            ['question_id' => 1,
            'name' => 'こうわ',
            'valid' => 0,
            'hide' => 0,
            ],
            // 東京 no2 
            ['question_id' => 2,
            'name' => 'かめいど',
            'valid' => 1,
            'hide' => 0,
            ],
            ['question_id' => 2,
            'name' => 'かめど',
            'valid' => 0,
            'hide' => 0,
            ],
            ['question_id' => 2,
            'name' => 'かめと',
            'valid' => 0,
            'hide' => 0,
            ],
            // 東京 no3 
            ['question_id' => 3,
            'name' => 'こうじまち',
            'valid' => 1,
            'hide' => 0,
            ],
            ['question_id' => 3,
            'name' => 'おかとまち',
            'valid' => 0,
            'hide' => 0,
            ],
            ['question_id' => 3,
            'name' => 'かゆまち',
            'valid' => 0,
            'hide' => 0,
            ],
            // 広島 no1 
            ['question_id' => 4,
            'name' => 'むかいなだ',
            'valid' => 1,
            'hide' => 0,
            ],
            ['question_id' => 4,
            'name' => 'むこうひら',
            'valid' => 0,
            'hide' => 0,
            ],
            ['question_id' => 4,
            'name' => 'むきひら',
            'valid' => 0,
            'hide' => 0,
            ],
            // 広島 no2 
            ['question_id' => 5,
            'name' => 'みつぎ',
            'valid' => 1,
            'hide' => 0,
            ],
            ['question_id' => 5,
            'name' => 'みよし',
            'valid' => 0,
            'hide' => 0,
            ],
            ['question_id' => 5,
            'name' => 'おしらべ',
            'valid' => 0,
            'hide' => 0,
            ],
            // 広島 no3 
            ['question_id' => 6,
            'name' => 'かなやま',
            'valid' => 1,
            'hide' => 0,
            ],
            ['question_id' => 6,
            'name' => 'きやま',
            'valid' => 0,
            'hide' => 0,
            ],
            ['question_id' => 6,
            'name' => 'ぎんざん',
            'valid' => 0,
            'hide' => 0,
            ],
        ]    
        );
    }
}
