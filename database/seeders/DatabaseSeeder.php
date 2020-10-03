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
        $this->call([
            ProjectSeeder::class,
            SertifikatTableSeeder::class,
            SkillsTableSeeder::class,
            WorkHistorySeeder::class,
            ProjectSeeder::class
        ]);
    }
}
