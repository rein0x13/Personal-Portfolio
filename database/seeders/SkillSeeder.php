<?php

namespace Database\Seeders;

use App\Models\Work;
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
                'name'          => 'Filament',
                'percentage'    => 83,
            ],
            [
                'name'          => 'MySQL',
                'percentage'    => 80,
            ],
        ];

        foreach ($skills as $key => $skill) {
            $skill['color'] = ($key % 5) + 1;
            Skill::create($skill);
        }


        $works = [
            [
                'name'          => 'Clinica Zamoras',
                'description'   => 'Creative Dev Labs [Ongoing]',
            ],
            [
                'name'          => 'Portfolio',
                'description'   => 'Personal [Current web application]',
            ],
        ];

        foreach ($works as $work) {
            $model = Work::create($work);
            if ($model->id == 1) {
                foreach (Skill::all() as $skill) {
                    $model->techStacks()->create([
                        'skill_id'  => $skill->id,
                    ]);
                }
            } else {
                $x = 1;
                foreach (Skill::all() as $skill) {
                    if ($x >= 6) {
                        break;
                    }
                    $model->techStacks()->create([
                        'skill_id'  => $skill->id,
                    ]);
                    $x++;
                }
            }
        }
    }
}
