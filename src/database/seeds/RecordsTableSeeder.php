<?php

use Illuminate\Database\Seeder;
// use App\Models\Record;
use App\Record;
// use File;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert(
            [
                ['study_date' => '2022-6-21',
                'study_time' => 2,
                'language_id' => 1,
                'content_id' => 1,
                ],
                ['study_date' => '2022-6-21',
                'study_time' => 3,
                'language_id' => 2,
                'content_id' => 1,
                ],
                ['study_date' => '2022-6-21',
                'study_time' => 4,
                'language_id' => 3,
                'content_id' => 1,
                ],
                ['study_date' => '2022-6-21',
                'study_time' => 2,
                'language_id' => 4,
                'content_id' => 1,
                ],
                ['study_date' => '2022-6-21',
                'study_time' => 0,
                'language_id' => 1,
                'content_id' => 2,
                ],
                ['study_date' => '2022-6-22',
                'study_time' => 4,
                'language_id' => 2,
                'content_id' => 2,
                ],
                ['study_date' => '2022-6-22',
                'study_time' => 2,
                'language_id' => 3,
                'content_id' => 2,
                ],
                ['study_date' => '2022-6-22',
                'study_time' => 3,
                'language_id' => 4,
                'content_id' => 2,
                ],
                ['study_date' => '2022-6-22',
                'study_time' => 3,
                'language_id' => 1,
                'content_id' => 3,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 3,
                'language_id' => 2,
                'content_id' => 3,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 2,
                'language_id' => 3,
                'content_id' => 3,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 3,
                'language_id' => 4,
                'content_id' => 3,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 4,
                'language_id' => 1,
                'content_id' => 1,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 3,
                'language_id' => 2,
                'content_id' => 1,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 2,
                'language_id' => 3,
                'content_id' => 2,
                ],
                ['study_date' => '2022-6-23',
                'study_time' => 3,
                'language_id' => 4,
                'content_id' => 2,
                ],
                ['study_date' => '2022-6-24',
                'study_time' => 4,
                'language_id' => 1,
                'content_id' => 3,
                ],
                ['study_date' => '2022-6-24',
                'study_time' => 3,
                'language_id' => 2,
                'content_id' => 3,
                ],
                ['study_date' => '2022-6-24',
                'study_time' => 2,
                'language_id' => 3,
                'content_id' => 3,
                ],
            ]);
    }

    // public function run()
    // {
    //     $json = File::get("database/data/records.json");
    //     $countries = json_decode($json);

    //     foreach ($countries as $value) {
    //         Record::create([
    //             "study_date" => $value->study_date,
    //             "study_time" => $value->study_time,
    //             "language_id" => $value->language_id,
    //             "content_id" => $value->content_id
    //         ]);
    //     }
    // }
}
