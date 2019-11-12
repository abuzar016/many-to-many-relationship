<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ],
            [
                'name' => Str::random(10)
            ]
        );
    }
}
