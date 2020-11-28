<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts")->insert([
            "titre" => "Django",
            "chiffre" => 96,
            "created_at" => now()
        ]);
        DB::table("facts")->insert([
            "titre" => "Ruby",
            "chiffre" => 76,
            "created_at" => now()
        ]);
        DB::table("facts")->insert([
            "titre" => "Ruby",
            "chiffre" => 87,
            "created_at" => now()
        ]);
        DB::table("facts")->insert([
            "titre" => "Python",
            "chiffre" => 87,
            "created_at" => now()
        ]);
        DB::table("facts")->insert([
            "titre" => "Java",
            "chiffre" => 87,
            "created_at" => now()
        ]);
        
    }
}
