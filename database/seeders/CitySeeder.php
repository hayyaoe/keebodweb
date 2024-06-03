<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        // Use the correct URL for the RajaOngkir API
        $response = Http::withOptions(['verify' => false])
            ->withHeaders([
                'key' => 'b38a1d53265650ebcdb3ec985fdab977'
            ])->get('https://api.rajaongkir.com/starter/city');

        // Check if the request was successful
        if ($response->successful()) {
            $cities = $response->json()['rajaongkir']['results'];

            $insert_city = [];

            foreach ($cities as $city) {
                $data = [
                    'type' => $city['type'],
                    'name' => $city['type'] . ' ' . $city['city_name'],
                    'postal_code' => $city['postal_code'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];

                $insert_city[] = $data;
            }

            $insert_city = collect($insert_city);

            $city_chunks = $insert_city->chunk(100);

            foreach ($city_chunks as $chunk) {
                City::insert($chunk->toArray());
            }
        } else {
            // Log or handle the error if the request was not successful
            $error = $response->json();
            // \Log::error('Failed to fetch cities from RajaOngkir API', ['error' => $error]);
        }
    }
}
