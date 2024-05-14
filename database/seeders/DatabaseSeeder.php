<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(SchoolSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(SeminarSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
