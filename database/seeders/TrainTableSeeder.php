<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10; $i++ ){
            $newTrain = new Train();

            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->date('H:i:s', $faker->time());
            $newTrain->orario_arrivo = $faker->date('H:i:s', $faker->time());
            $newTrain->codice = $faker->randomNumber(4);
            $newTrain->numero_carrozze = $faker->randomNumber(2);
            $newTrain->ritardo = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
