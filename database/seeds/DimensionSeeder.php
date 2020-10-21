<?php

use Illuminate\Database\Seeder;
use App\Models\Dimension;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimensions')->delete();

        Dimension::create([
            'title'    => 'Aspiración',
            'topic_id' => 1,
        ]);
        Dimension::create([
            'title'    => 'Trayectoria',
            'topic_id' => 1,
        ]);
        Dimension::create([
            'title'       => 'Conciencia de si mismo',
            'description' => 'La medida en que una persona tiene percepción de sí mismo/a, comprende con claridad sus fortalezas y debilidades y utiliza estos conocimientos para desempeñarse de manera eficaz.',
            'topic_id'    => 2,
        ]);
        Dimension::create([
            'title'       => 'Agilidad de Cambio',
            'description' => 'La medida en que una persona gusta del cambio, explora continuamente nuevas opciones y soluciones y se interesa en liderar los esfuerzos de cambio organizacionales.',
            'topic_id'    => 2,
        ]);
        Dimension::create([
            'title'       => 'Agilidad Mental',
            'description' => 'La medida en que una persona abraza la complejidad, examina problemas de maneras únicas e inusuales, es inquisitiva y puede establecer conexiones nuevas entre diferentes conceptos.',
            'topic_id'    => 2,
        ]);
        Dimension::create([
            'title'       => 'Agilidad Interpersonal',
            'description' => 'La medida en que una persona es abierta respecto de los demás, disfruta de interactuar con diferentes tipos de personas, comprende sus fortalezas, intereses y limitaciones únicas y las utiliza de manera eficaz para lograr las metas organizacionales.',
            'topic_id'    => 2,
        ]);
        Dimension::create([
            'title'       => 'Agilidad de Resultados',
            'description' => 'La medida en que una persona se siente motivada por los retos y puede producir resultados en situaciones que enfrenta por primera vez y/o dificultosas a través de sus recursos e inspirando a los demás.',
            'topic_id'    => 2,
        ]);
    }
}
