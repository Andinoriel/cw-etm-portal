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
        $superadmin = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@localhost',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        $superadmin->assignRole('super-admin');

        \App\Models\Faculty::factory(2)->create();
        \App\Models\Cathedra::factory(4)->create();
        \App\Models\Teacher::factory(16)->create();
        \App\Models\Subject::factory(10)->create();
        \App\Models\Book::factory(64)->create();

        // $this->call(PermissionsDemoSeeder::class);
    }
}
