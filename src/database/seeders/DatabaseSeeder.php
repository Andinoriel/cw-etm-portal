<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Faculty::factory(2)->create();
        \App\Models\Cathedra::factory(4)->create();
        \App\Models\Teacher::factory(16)->create();
        \App\Models\Subject::factory(10)->create();
        \App\Models\Book::factory(64)->create();
    }
}
