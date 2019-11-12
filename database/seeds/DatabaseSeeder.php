<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(CoursesTableSeeder::class);
        factory(App\Course::class, 10)->create()->each(function ($course) {
            $course->name()->save(factory(App\Course::class)->make());
        });
        
        
    }
}
