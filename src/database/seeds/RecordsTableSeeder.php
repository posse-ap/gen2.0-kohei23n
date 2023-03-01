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
            'study_date' => '2023-03-1',
            'study_time' => 2,
            'language_id' => 1,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2023-03-2',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2023-03-3',
            'study_time' => 4,
            'language_id' => 3,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2023-03-4',
            'study_time' => 2,
            'language_id' => 4,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2023-03-5',
            'study_time' => 0,
            'language_id' => 1,
            'content_id' => 2
        ]);

        Record::create([
            'study_date' => '2023-03-6',
            'study_time' => 4,
            'language_id' => 2,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2023-03-9',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2023-03-8',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 2,
        ]);

        Record::create([
            'study_date' => '2023-03-9',
            'study_time' => 3,
            'language_id' => 1,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2023-03-10',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2023-03-11',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2023-03-12',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2023-03-13',
            'study_time' => 4,
            'language_id' => 1,
            'content_id' => 1,
        ]);

        Record::create([
            'study_date' => '2023-03-14',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 1,
        ]);
        
        Record::create([
            'study_date' => '2023-03-15',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 2,
        ]);
        
        Record::create([
            'study_date' => '2023-03-16',
            'study_time' => 3,
            'language_id' => 4,
            'content_id' => 2,
        ]);
        
        Record::create([
            'study_date' => '2023-03-19',
            'study_time' => 4,
            'language_id' => 1,
            'content_id' => 3,
        ]);
        
        Record::create([
            'study_date' => '2023-03-18',
            'study_time' => 3,
            'language_id' => 2,
            'content_id' => 3,
        ]);

        Record::create([
            'study_date' => '2023-03-19',
            'study_time' => 2,
            'language_id' => 3,
            'content_id' => 3,
        ]);
    }
}
