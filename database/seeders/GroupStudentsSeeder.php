<?php

namespace Database\Seeders;

use App\Models\GroupStudent;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'group_id' => 1,
                'student_id' => 6,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 1,
                'student_id' => 7,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 1,
                'student_id' => 8,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 1,
                'student_id' => 9,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            // 2 chi group malumotlari
            [
                'group_id' => 2,
                'student_id' => 7,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 8,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 9,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 10,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 11,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 12,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 13,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
            [
                'group_id' => 2,
                'student_id' => 14,
                'status' => 1,
                'closed_at' => date("Y-m-d"),
            ],
        ];
        foreach ($datas as $data){
            GroupStudent::create($data);
        }
    }
}
