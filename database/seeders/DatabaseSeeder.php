<?php

namespace Database\Seeders;

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

        $this->call([
            RolesAndPermissionsSeeder::class,
            UsersTableSeeder::class,
            StationsTableSeeder::class,
            PricesTableSeeder::class,
            FeedbackTableSeeder::class,
            ComplaintsTableSeeder::class,
        ]);
    }
}
