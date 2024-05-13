<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = config('db.trains');


        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->data = $train['data'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}
