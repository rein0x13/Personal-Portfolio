<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
                'name'          => 'MLG College of Learning',
                'year_start'    => '2022',
                'year_end'      => 'Present',
                'course'        => 'Bachelor of Science in Information Technology'
            ],
            [
                'name'          => 'Cebu Institute of Technology - University',
                'year_start'    => '2018',
                'year_end'      => '2019',
                'course'        => 'Bachelor of Science in Computer Science'
            ],
            [
                'name'          => 'University of Cebu - Banilad Campus',
                'year_start'    => '2016',
                'year_end'      => '2018',
                'course'        => 'Information and Communications Technology'
            ],
        ];

        foreach ($schools as $school) {
            // DB::table('schools')->insert($school);
            School::create($school);
        }
    }
}
