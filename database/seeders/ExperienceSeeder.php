<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'title' => 'First Experience',
                'content' => 'This is a description of the first experience.',
                'image' => 'images/experience1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Experience',
                'content' => 'This is a description of the second experience.',
                'image' => 'images/experience2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
