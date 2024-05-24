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
                'name' => 'c-1003',
                'start_date' => '2024-01-05',
                'start_hour' => '18:00:00',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
                'cource_id' => Cource::select('id')->inRandomOrder()->first()->id,
                'lang_id' => Lang::select('id')->inRandomOrder()->first()->id,
                'day_id' => Day::select('id')->inRandomOrder()->first()->id,
                'max_student' => 15,
                'max_teacher' => 3,
                'status' => 2,
            ],
            [
                'name' => 'c-1005',
                'start_date' => '2024-01-05',
                'start_hour' => '18:30:00',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
                'cource_id' => Cource::select('id')->inRandomOrder()->first()->id,
                'lang_id' => Lang::select('id')->inRandomOrder()->first()->id,
                'day_id' => Day::select('id')->inRandomOrder()->first()->id,
                'max_student' => 15,
                'max_teacher' => 3,
                'status' => 2,
            ],
            [
                'name' => 'c-1006',
                'start_date' => '2024-01-05',
                'start_hour' => '18:30:00',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
                'cource_id' => Cource::select('id')->inRandomOrder()->first()->id,
                'lang_id' => Lang::select('id')->inRandomOrder()->first()->id,
                'day_id' => Day::select('id')->inRandomOrder()->first()->id,
                'max_student' => 15,
                'max_teacher' => 3,
                'status' => 2,
            ],
        ];
        foreach ($data as $d){
            Group::create($d);
        }
    }
}
