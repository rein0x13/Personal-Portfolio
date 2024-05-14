<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experience = [
            'title'     => 'Collaboration with CreativeDevLabs Innovative Solutions',
            'start'     => '2023',
            'end'       => 'Present',
            'details'   => [
                [
                    'detail' => 'Worked with CreativeDevLabs team in developing the Clinica Zamoras System',
                ],
                [
                    // 'detail' => 'Helped co-workers with PHP and Object-Oriented Programming roadblocks',
                    'detail' => 'Assisted colleagues in overcoming challenges with PHP and Object-Oriented Programming',
                ],
                [
                    'detail' => 'Learned and applied GitHub workflows',
                ],
                [
                    'detail' => 'Ongoing experience with Laravel, Filament, Livewire, and Alpine.js',
                ],
            ],
        ];

        Experience::create($experience);
    }
}
