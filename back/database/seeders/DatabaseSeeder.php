<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Building;
use App\Models\Resource;
use App\Models\Worker;
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
        $this->call([
            UserSeeder::class,
            PlanetSeeder::class,
            ContinentSeeder::class,
            RegionSeeder::class,
            BuildingSeeder::class,
            ResourceSeeder::class,
            WorkerSeeder::class,
            BuildingMapSeeder::class,
            ResourceMapSeeder::class,
            WorkerMapSeeder::class,
        ]);
    }
}