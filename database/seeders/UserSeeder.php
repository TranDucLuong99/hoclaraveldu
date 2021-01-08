<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Có hai cách chạy seed
//        1 chạy vào file mặc định DatabaseSeeder: php artisan db:seed
//        2 chạy vào thằng class: php artisan db:seed --class = tên class
        $data = [
                [
                    'id' => 120,
                    'email' => 'tranducluong8899@gmail.com',
                    'fullname' => 'tran duc luong',
                    'phoneNumber' => '0327018797',
                    'facebook' => 'https://www.facebook.com/Gnoul.tran98',
                    'birthday' => 1609001445,
                    'job' => 'Dev',
                    'gender' => '1',
                    'role' => '1',
                    'avatar' => '',
                    'status' => 1,
                    'created_at' => now(),
                ],
                [
                    'id' => 121,
                    'email' => 'tranducluong99@gmail.com',
                    'fullname' => 'tran duc leo',
                    'phoneNumber' => '0327018798',
                    'facebook' => 'https://www.facebook.com/Gnoul.tran99',
                    'birthday' => 1609001455,
                    'job' => 'Dev',
                    'gender' => '1',
                    'role' => '1',
                    'avatar' => '',
                    'status' => 1,
                    'created_at' => now(),
                ]
        ];
        User::insert($data);
    }
}
