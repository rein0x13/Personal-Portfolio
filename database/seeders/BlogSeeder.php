<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::findOrFail(1);
        for ($i = 0; $i < 30; $i++) {
            $user->blogs()->create([
                'title' => fake()->text(10),
                'body' => fake()->text(),
            ]);
        }
    }
}
