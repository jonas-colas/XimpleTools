<?php

use Illuminate\Database\Seeder;
use App\Models\Aspect;

class AspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspects')->delete();

        Aspect::create([
            'title'    => 'Orientación al feedback',
            'dimension_id' => 3,
        ]);
        Aspect::create([
            'title'    => 'Reflexión',
            'dimension_id' => 3,
        ]);
        Aspect::create([
            'title'    => 'Autoconocimiento',
            'dimension_id' => 3,
        ]);
        Aspect::create([
            'title'    => 'Aprendiz personal',
            'dimension_id' => 3,
        ]);
        Aspect::create([
            'title'    => 'Inteligencia Emocional',
            'dimension_id' => 3,
        ]);
        Aspect::create([
            'title'    => 'Predisposición al cambio',
            'dimension_id' => 4,
        ]);
        Aspect::create([
            'title'    => 'Experimentador/a',
            'dimension_id' => 4,
        ]);
        Aspect::create([
            'title'    => 'Constante mejorador/a',
            'dimension_id' => 4,
        ]);
        Aspect::create([
            'title'    => 'Gestión de Innovación',
            'dimension_id' => 4,
        ]);
        Aspect::create([
            'title'    => 'Comodidad liderando el cambio',
            'dimension_id' => 4,
        ]);
        Aspect::create([
            'title'    => 'Escáner amplio',
            'dimension_id' => 5,
        ]);
        Aspect::create([
            'title'    => 'Conector/a',
            'dimension_id' => 5,
        ]);
        Aspect::create([
            'title'    => 'Complejidad',
            'dimension_id' => 5,
        ]);
        Aspect::create([
            'title'    => 'Manejo de incertidumbre',
            'dimension_id' => 5,
        ]);
        Aspect::create([
            'title'    => 'Inquisitivo/a',
            'dimension_id' => 5,
        ]);
        Aspect::create([
            'title'    => 'Flexibilidad Situacional',
            'dimension_id' => 6,
        ]);
        Aspect::create([
            'title'    => 'Comunicador ágil',
            'dimension_id' => 6,
        ]);
        Aspect::create([
            'title'    => 'Gestión de conflictos',
            'dimension_id' => 6,
        ]);
        Aspect::create([
            'title'    => 'Mente abierta',
            'dimension_id' => 6,
        ]);
        Aspect::create([
            'title'    => 'Ayuda a otros a tener éxito',
            'dimension_id' => 6,
        ]);
        Aspect::create([
            'title'    => 'Logro de resultados a pesar de adversidad',
            'dimension_id' => 7,
        ]);
        Aspect::create([
            'title'    => 'Conductor / impulsor',
            'dimension_id' => 7,
        ]);
        Aspect::create([
            'title'    => 'Empuje',
            'dimension_id' => 7,
        ]);
        Aspect::create([
            'title'    => 'Inventiva',
            'dimension_id' => 7,
        ]);
        Aspect::create([
            'title'    => 'Motiva a otros/as',
            'dimension_id' => 7,
        ]);

    }
}
