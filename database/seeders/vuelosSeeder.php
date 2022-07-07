<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class vuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\vuelos::factory()->count(2)->state(new Sequence(
            ['ciudadOrigen' => 'Cuenca'],
            ['ciudadOrigen' => 'Quito'],
        ))->create([
            'ciudadDestino' => 'Guayaquil',
            'aerolinea' => 'LATAM',
         ]);
        
    }
}
