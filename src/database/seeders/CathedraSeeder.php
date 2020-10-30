<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cathedra;

class CathedraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cathedra::factory()->count(70)->create();
    }
}
