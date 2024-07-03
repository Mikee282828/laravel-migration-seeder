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
        $newTrain->azienda = $faker->company();
        $newTrain->stazione_di_partenza = $faker->city();
        $newTrain->stazione_di_arrivo = $faker->city();
        $newTrain->orario_di_partenza = $faker->time('H:i');
        $newTrain->orario_di_arrivo = $faker->time('H:i');
        $newTrain->codice_treno = strtoupper($faker->randomLetter()) . $faker->randomNumber(5,true);
        $newTrain->numero_carrozze = $faker->numberBetween(5, 20);
        $newTrain->in_orario = $faker->boolean();
        $newTrain->cancellato=$faker->boolean();
        $newTrain->save();
    }
}
