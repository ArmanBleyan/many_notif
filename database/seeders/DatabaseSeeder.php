<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\CinemaMovie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        Cinema::factory(2)->create();
        Movie::factory(10)->create();

        CinemaMovie::factory(20)->create();
    }
}
