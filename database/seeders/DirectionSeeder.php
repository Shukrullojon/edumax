<?php

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Filial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Grammer',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Vocabulary',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Listening',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Speaking',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
            ],
            [
                'name' => 'General',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
            ],
            [
                'name' => 'Ielts',
                'filial_id' => Filial::select('id')->inRandomOrder()->first()->id,
            ],
        ];
        foreach ($data as $d){
            Direction::create($d);
        }
    }
}
