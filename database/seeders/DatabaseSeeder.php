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
        \App\Models\About::factory(3)->create();
        $this->call(FactSeeder::class);
        $this->call(SkillSeeder::class);
        \App\Models\Portfolio::factory(3)->create();

    }
}
