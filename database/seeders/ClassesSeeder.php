<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'PHP Class',
                'avatar' => 'Khongcogidau',
                'status' => 1,
                'userId' => 1,
                'subjectId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'JS Class',
                'avatar' => 'Khongcogidau',
                'status' => 1,
                'userId' => 1,
                'subjectId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'HTML Class',
                'avatar' => 'Khongcogidau',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'PHP Class',
                'avatar' => 'Khongcogidau',
                'status' => 1,
                'userId' => 1,
                'subjectId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'CSS Class',
                'avatar' => 'Khongcogidau',
                'status' => 1,
                'userId' => 2,
                'subjectId' => 1,
                'created_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Bootstrap Class',
                'avatar' => 'Khongcogidau',
                'status' => 1,
                'userId' => 1,
                'subjectId' => 1,
                'created_at' => now(),
            ]
        ];
        Classes::insert($data);
    }

}
