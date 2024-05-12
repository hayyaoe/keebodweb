<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $data = [
            [
                "name" => "60%",
                "price" => 3000000,
                "keys" => 61,
                "available" => true,
            ],
        ];
        DB::table("types")->insert($data);

        $data = [
            [
                "name" => "ALPACCA",
                "price" => 5000,
                "description" => "Tactlie",
                "available" => true,
            ],
            [
                "name" => "CS-AIR",
                "price" => 3500,
                "description" => "Linear",
                "available" => true,
            ],
            [
                "name" => "BOBA U4T",
                "price" => 12000,
                "description" => "Tactlie",
                "available" => true,
            ],
        ];
        DB::table("key_switches")->insert($data);

        $data = [
            [
                "name" => "OLIVIA",
                "price" => 500000,
                "available" => true,
            ],
            [
                "name" => "SAMURAI",
                "price" => 200000,
                "available" => true,
            ],
            [
                "name" => "APPLE",
                "price" => 220000,
                "available" => true,
            ],
        ];
        DB::table("keycaps")->insert($data);

        $data = [
            [
                "name" => "3MODE",
                "price" => 150000,
                "available" => true,
            ],
            [
                "name" => "WIRED",
                "price" => 20000,
                "available" => true,
            ],
            [
                "name" => "WIRELESS",
                "price" => 75000,
                "available" => true,
            ],
        ];
        DB::table("connections")->insert($data);

        $data = [
            [
                "name" => "ASSEMBLED",
                "price" => 0,
            ],
            [
                "name" => "DIY",
                "price" => 0,
            ],
        ];
        DB::table("assemblies")->insert($data);

        $data = [
            [
                "name" => "admin",
                "email" => "admin@keebod.my.id",
                "password" => "12345678",
            ],
        ];
        DB::table("users")->insert($data);
    }
}
