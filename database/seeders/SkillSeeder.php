<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name'          => 'HTML',
                'percentage'    => 70,
            ],
            [
                'name'          => 'CSS',
                'percentage'    => 60,
            ],
            [
                'name'          => 'JavaScript',
                'percentage'    => 65,
            ],
            [
                'name'          => 'Vanilla PHP',
                'percentage'    => 90,
            ],
            [
                'name'          => 'Laravel',
                'percentage'    => 85,
            ],
            [
                'name'          => 'MySQL',
                'percentage'    => 80,
            ],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
