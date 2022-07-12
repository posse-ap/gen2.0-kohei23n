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
            'study_date' => '2022-7-1',
            'study_time' => 2,
            'language_id' => 1,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-7-2',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-7-3',
            'study_time' => 4,
            'language_id' => 3,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-7-4',
            'study_time' => 2,
            'language_id' => 4,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-7-5',
            'study_time' => 0,
            'language_id' => 1,
            'content_id' => 2
        ]);

        Record::create([
            'study_date' => '2022-7-6',
            'study_time' => 4,
            'language_id' => 2,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2022-7-7',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2022-7-8',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2022-7-9',
            'study_time' => 3,
            'language_id' => 1,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-7-10',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-7-11',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-7-12',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-7-13',
            'study_time' => 4,
            'language_id' => 1,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2022-7-14',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 1,
        ]);
        
        Record::create([
            'study_date' => '2022-7-15',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 2,
        ]);
        
        Record::create([
            'study_date' => '2022-7-16',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 2,
        ]);
        
        Record::create([
            'study_date' => '2022-7-17',
            'study_time' => 4,
            'language_id' => 1,
            'content_id' => 3,
        ]);
        
        Record::create([
            'study_date' => '2022-7-18',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2022-7-19',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 3,
        ]);
    }
}
