<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $trains = config('db.trains');


        // foreach ($trains as $train) {
        //     $newTrain = new Train();
        //     $newTrain->azienda = $train['azienda'];
        //     $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
        //     $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
        //     $newTrain->orario_di_partenza = $train['orario_di_partenza'];
        //     $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
        //     $newTrain->data = $train['data'];
        //     $newTrain->codice_treno = $train['codice_treno'];
        //     $newTrain->in_orario = $train['in_orario'];
        //     $newTrain->cancellato = $train['cancellato'];
        //     $newTrain->save();
        // }

        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda = $faker->randomElement(['Trenitalia', 'Italo', 'FrecciaRossa']);
            $train->stazione_di_partenza = $faker->randomElement(['Roma Termini', 'Milano', 'Bergamo', 'Bologna', 'Torino Porta Nuova']);
            $train->stazione_di_arrivo =  $faker->randomElement(['Bari Centrale', 'Napoli', 'Taranto', 'Firenze', 'Ancona']);
            $train->orario_di_partenza = $faker->time('H:i:s', '12:00:00');
            $train->orario_di_arrivo = $faker->time('H:i:s', '24:00:00');
            $train->data = $faker->randomElement(['2024-05-13', '2024-05-14', '2024-05-15', '2024-05-16', '2024-05-17']);
            $train->codice_treno = '#' . $faker->bothify('????##');
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
