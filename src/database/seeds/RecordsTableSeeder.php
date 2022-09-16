<?php

use Illuminate\Database\Seeder;
// use App\Models\Record;
use App\Record;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Record::create([
            'study_date' => '2022-9-1',
            'study_time' => 2,
            'language_id' => 1,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-9-2',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-9-3',
            'study_time' => 4,
            'language_id' => 3,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-9-4',
            'study_time' => 2,
            'language_id' => 4,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-9-5',
            'study_time' => 0,
            'language_id' => 1,
            'content_id' => 2
        ]);

        Record::create([
            'study_date' => '2022-9-6',
            'study_time' => 4,
            'language_id' => 2,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2022-9-9',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2022-9-8',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2022-9-9',
            'study_time' => 3,
            'language_id' => 1,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-9-10',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-9-11',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-9-12',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-9-13',
            'study_time' => 4,
            'language_id' => 1,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-9-14',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 1,
        ]);
        
        Record::create([
            'study_date' => '2022-9-15',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 2,
        ]);
        
        Record::create([
            'study_date' => '2022-9-16',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 2,
        ]);
        
        Record::create([
            'study_date' => '2022-9-19',
            'study_time' => 4,
            'language_id' => 1,
            'content_id' => 3,
        ]);
        
        Record::create([
            'study_date' => '2022-9-18',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-9-19',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 3,
        ]);
    }
}
