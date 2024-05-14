<?php

namespace Database\Seeders;

use App\Models\Seminar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seminars = [
            [
                'name'          => '12th International Business Summit',
                'subheading'    => 'Eastern Visayas State University',
                'date'          => \Carbon\Carbon::parse('Nov-13-2023'),
                'description'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga asperiores nemo eius doloremque quam impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum voluptatum nobis libero aperiam nisi culpa eligendi quod? Voluptatibus repudiandae omnis cumque odit, corporis perferendis maiores, labore dolorem natus at amet.'
            ],
        ];

        foreach ($seminars as $seminar) {
            Seminar::create($seminar);
        }
    }
}
