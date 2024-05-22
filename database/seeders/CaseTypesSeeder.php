<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CaseTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("case_types")->insert([
            [
                "name" => "ALU",
                "price" => 800000,
                "available" => true,
            ],
            [
                "name" => "ACRYBLK",
                "price" => 150000,
                "available" => true,
            ],
            [
                "name" => "ACRYWHT",
                "price" => 1500000,
                "available" => true,
            ],
        ]);
    }
}
