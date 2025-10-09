<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Property;
use App\Models\Realtors;
use App\Models\Referals;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admininstrator ',
            'email' => 'admin1@gmail.com',
            'password' => 'Password#120!',
            'is_staff'=>true,
            'is_superuser' => true
        ]);
    }
}
