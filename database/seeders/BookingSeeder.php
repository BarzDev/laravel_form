<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use Faker\Factory as Faker;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Booking::create([
                'name' => $faker->name,
                'phone' => $faker->numerify('08##########'),
                'booking_date' => $faker->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
                'type' => $faker->randomElement(['VIP', 'Premium', 'Economy']),
            ]);
        }
    }
}
