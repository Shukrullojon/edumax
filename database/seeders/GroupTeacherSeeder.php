<?php

namespace Database\Seeders;

use App\Models\GroupTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'group_id' => 1,
                'room_id' => 1,
                'teacher_id' => 1,
                'direction_id' => 1,
                'day_id' => 1,
                'begin_time' => '18:00:00',
                'end_time' => '19:00:00',
                'status' => 1,
            ],
            [
                'group_id' => 2,
                'room_id' => 2,
                'teacher_id' => 1,
                'direction_id' => 2,
                'day_id' => 2,
                'begin_time' => '18:00:00',
                'end_time' => '19:00:00',
                'status' => 1,
            ],
            [
                'group_id' => 3,
                'room_id' => 3,
                'teacher_id' => 1,
                'direction_id' => 5,
                'day_id' => 3,
                'begin_time' => '18:00:00',
                'end_time' => '19:00:00',
                'status' => 1,
            ],
        ];
        foreach ($datas as $data){
            GroupTeacher::create($data);
        }
    }
}
