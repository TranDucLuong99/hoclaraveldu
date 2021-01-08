<?php

namespace Database\Seeders;

use App\Models\Subjects;
use Illuminate\Database\Seeder;
class SubjectsSeeder extends Seeder
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
                'id' => 2,
                'name' => 'HTML',
                'description' => "Đây là môn học tự chọn",
                'avatar' => '',
                'status' => 1,
                'userId' => 100,
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'CSS',
                'description' => "Đây là môn học tự chọn",
                'avatar' => '',
                'status' => 1,
                'userId' => 100,
                'created_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'JS',
                'description' => "Đây là môn học tự chọn",
                'avatar' => '',
                'status' => 1,
                'userId' => 100,
                'created_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Bootstrap',
                'description' => "Đây là môn học tự chọn",
                'avatar' => '',
                'status' => 1,
                'userId' => 100,
                'created_at' => now(),
            ],
        ];
        Subjects::insert($data);
    }



}
