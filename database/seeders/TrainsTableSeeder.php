<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $newTrain = new Train();
        $newTrain->azienda = "provaSeeder";
        $newTrain->stazione_di_partenza = "provastazionepartenza";
        $newTrain->stazione_di_arrivo = "provastazionearrivo";
        $newTrain->orario_di_partenza = "11:40";
        $newTrain->orario_di_arrivo = "12:00";
        $newTrain->codice_treno = "12394";
        $newTrain->numero_carrozze = 5;
        $newTrain->in_orario = 1;
        $newTrain->cancellato=1;
        $newTrain->save();
    }
}
