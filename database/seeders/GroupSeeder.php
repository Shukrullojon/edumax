<?php

namespace Database\Seeders;

use App\Models\Cource;
use App\Models\Day;
use App\Models\Filial;
use App\Models\Group;
use App\Models\Lang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'c-0904',
                'start_date' => '2024-05-01',
                'start_hour' => '08:30',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 16,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 2,
                'name' => 'c-0301',
                'start_date' => '2024-05-01',
                'start_hour' => '09:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 3,
                'name' => 'C-1101',
                'start_date' => '2024-05-01',
                'start_hour' => '09:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 4,
                'name' => 'c-0201',
                'start_date' => '2024-05-01',
                'start_hour' => '10:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 5,
                'name' => 'c-0101',
                'start_date' => '2024-05-01',
                'start_hour' => '10:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 6,
                'name' => 'C-0602',
                'start_date' => '2024-05-01',
                'start_hour' => '14:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 7,
                'name' => 'C-1002',
                'start_date' => '2024-05-01',
                'start_hour' => '14:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 8,
                'name' => 'C-0102',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 9,
                'name' => 'C-1102',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 10,
                'name' => 'c-0405',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 11,
                'name' => 'C-1003',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 12,
                'name' => 'C-0905',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 13,
                'name' => 'C-0205',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 14,
                'name' => 'C-0103',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 15,
                'name' => 'C-0906',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 16,
                'name' => 'C-1201',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 17,
                'name' => 'C-0704',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 18,
                'name' => 'C-0304',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 2,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 19,
                'name' => 'C-0401',
                'start_date' => '2024-05-01',
                'start_hour' => '10:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 20,
                'name' => 'C-0115',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 21,
                'name' => 'C-0117',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 22,
                'name' => 'C-0210',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 23,
                'name' => 'C-0306',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 24,
                'name' => 'C-0202',
                'start_date' => '2024-05-01',
                'start_hour' => '14:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 25,
                'name' => 'C-1005',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 26,
                'name' => 'C-0203',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 27,
                'name' => 'C-0507',
                'start_date' => '2024-05-01',
                'start_hour' => '06:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 28,
                'name' => 'C-0304.1',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 29,
                'name' => 'C-0402',
                'start_date' => '2024-05-01',
                'start_hour' => '15:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 30,
                'name' => 'C-0404',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 31,
                'name' => 'C-0503',
                'start_date' => '2024-05-01',
                'start_hour' => '09:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 32,
                'name' => 'C-0802',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 33,
                'name' => 'C-1107',
                'start_date' => '2024-05-01',
                'start_hour' => '18:30:00',
                'filial_id' => 1,
                'cource_id' => 3,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 34,
                'name' => '1206',
                'start_date' => '2024-05-01',
                'start_hour' => '15:00:00',
                'filial_id' => 1,
                'cource_id' => 1,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 35,
                'name' => '1106',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 1,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 36,
                'name' => '0104',
                'start_date' => '2024-05-01',
                'start_hour' => '15:00:00',
                'filial_id' => 1,
                'cource_id' => 1,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 37,
                'name' => '0302',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 1,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 38,
                'name' => '0305',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 1,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
            [
                'id' => 39,
                'name' => '0403',
                'start_date' => '2024-05-01',
                'start_hour' => '17:00:00',
                'filial_id' => 1,
                'cource_id' => 1,
                'lang_id' => 1,
                'day_id' => 3,
                'max_student' => 14,
                'max_teacher' => 1,
                'status' => 2,
            ],
        ];
        foreach ($data as $d){
            Group::create($d);
        }
    }
}
