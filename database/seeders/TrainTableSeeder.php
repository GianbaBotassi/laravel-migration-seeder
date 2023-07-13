<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Esempio per generare senza factory
        // $train = new Train();
        // $train->code = '1234567890';

        // $train->save();

        //Genera tramite factory un numero di oggetti pari a count
        Train::factory()->count(50)->create();
    }
}
