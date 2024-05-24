<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Shukrullo',
            'surname' => 'Fatulloyev',
            'email' => 'shukrullo@gmail.com',
            'phone' => '993011798',
            'password' => Hash::make('12345678'),
            'filial_id' => 1,
        ])->assignRole([Role::where('name','Admin')->first()->id]);
    }
}
