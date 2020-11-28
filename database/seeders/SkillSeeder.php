<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skills")->insert([
            "langue" => "HTML",
            "pourcentage" => 100
        ]);
        DB::table("skills")->insert([
            "langue" => "CSS",
            "pourcentage" => 99
        ]);
        DB::table("skills")->insert([
            "langue" => "JS",
            "pourcentage" => 70
        ]);
        DB::table("skills")->insert([
            "langue" => "LARAVEL",
            "pourcentage" => 100
        ]);
    }
}
