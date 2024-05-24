<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(FilialSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(CourceSeeder::class);
        $this->call(DirectionSeeder::class);
        $this->call(LangSeeder::class);
        $this->call(DaySeeder::class);
        $this->call(StudentSeeder::class);
    }
}
