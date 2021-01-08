<?php

namespace Database\Seeders;

use App\Models\Course_rqs;
use Illuminate\Database\Seeder;

class CourseRqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [];
        for($i = 0; $i < 55; $i++){
            $data [] = [
                'id' => $i+1,
                'frequency' => rand(1,3),
                'durationTime' => rand(1,3),
                'targetTop' => rand(1,3),
                'wishJob' => rand(1,3),
                'completeExercise' => rand(1,3),
                'outCondition' => rand(1,3),
                'nowSkill' => rand(1,3),
                'mission' => rand(1,3),
                'status' => 3,
                'userId' => rand(1,15),
                'classesId' => rand(1,5),
            ];
        }
        Course_rqs::insert($data);
    }
}
