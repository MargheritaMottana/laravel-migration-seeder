<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // per svuotare la tabella ad ogni nuovo seeder
        Train::truncate();

        for ($i=0; $i < 10; $i++) { 

            // mi salvo il treno
            $train = new Train();

            // popolo tutti i dati
            $train->company = fake()->company();    
            $train->dep_station = fake()->city();
            $train->arr_station = fake()->city();
            $train->dep_time = fake()->time();
            $train->arr_time = fake()->time();
            $train->code = strtoupper(fake()->shuffle(fake()->bothify('????????########')));
            $train->wagons_number = rand(2, 10);
            $train->on_time = fake()->boolean(70);
            $train->canceled = fake()->boolean(70);

            // per salvare i dati generati
            $train->Save();
        }
    }
}
