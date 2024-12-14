<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('tickets')->insert([
            'arrival' => 'Warszawa',
            'departure' => 'Lublin',
            'startDate' => date('2021-02-01'),
            'startHour' => '19:00',
            'flightClass' => 'Standard',
            'airline' => 'Linia lotnicza',
            'price' => '570'
        ]);

        \Illuminate\Support\Facades\DB::table('tickets')->insert([
            'arrival' => 'Lublin',
            'departure' => 'Warszawa',
            'startDate' => date('2021-02-03'),
            'startHour' => '20:00',
            'flightClass' => 'Business',
            'airline' => 'Airlines',
            'price' => '1020'
        ]);
    }


}
