<?php

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();

        Question::create([
            'title'    => '¿Manifiesta interes en aumentar sustancialmente la complejidad de sus desafíos y realiza acciones que lo acercan a ello?',
            'dimension_id' => 1,
        ]);
        Question::create([
            'title'    => '¿Demuestra que su propósito profesional está asociado a moverse/ liderar situaciones y/o contextos complejos, ambigüos e inciertos?',
            'dimension_id' => 1,
        ]);
        Question::create([
            'title'    => '¿Disfruta de impulsar y motorizar los cambios que el negocio le va proponiendo?',
            'dimension_id' => 1,
        ]);
        Question::create([
            'title'    => 'En los ultimos 5 años, ¿rotó al menos por 3 roles o puestos diferentes?',
            'dimension_id' => 2,
        ]);
        Question::create([
            'title'    => 'En su trayectoria profesional ¿demuestra haber tomado decisiones de cambio sustanciales y/o arriesgadas, en pos de un crecimiento o cambio profesional?',
            'dimension_id' => 2,
        ]);
        Question::create([
            'title'    => 'En TODA su trayectoria profesional, ¿se observa un recorrido amplio y diverso, con variabilidad de realidades de contexto y temas de espacilidad abordados?',
            'dimension_id' => 2,
        ]);
        Question::create([
            'title'    => '¿Pide feedback de manera constante a distintos interlocutores (líder, pares, equipo, cliente, etc).',
            'dimension_id' => 3,
            'aspect_id' => 1,
        ]);
        Question::create([
            'title'    => '¿Se muestra receptivo/a a los feedbacks y dispuesto/a a cambiar su comportamiento para hacerlo distinto una próxima vez?',
            'dimension_id' => 3,
            'aspect_id' => 2,
        ]);
        Question::create([
            'title'    => '¿Conoce sus fortalezas y oportunidades de mejora, trabajando en potenciarlas y/o desarrollarlas?',
            'dimension_id' => 3,
            'aspect_id' => 3,
        ]);
        Question::create([
            'title'    => '¿Se desafía a aprender nuevas habilidades y desarrollar nuevos comportamientos?',
            'dimension_id' => 3,
            'aspect_id' => 4,
        ]);
        Question::create([
            'title'    => '¿Registra sus emociones y puede regular su conducta a partir de esto?',
            'dimension_id' => 3,
            'aspect_id' => 5,
        ]);
        Question::create([
            'title'    => '¿Se muestra interesado/a en abordar desafíos que impliquen nuevos aprendizajes?',
            'dimension_id' => 4,
            'aspect_id' => 6,
        ]);
        Question::create([
            'title'    => '¿Disfruta de experimentar el cambio e impulsa a que el equipo también lo haga?',
            'dimension_id' => 4,
            'aspect_id' => 7,
        ]);
        Question::create([
            'title'    => '¿Cuestiona el status quo y las formas/procesos tradicionales?',
            'dimension_id' => 4,
            'aspect_id' => 8,
        ]);
        Question::create([
            'title'    => '¿Propone cambios disruptivos y/o que logran anticiparse a las demandas que tendrá su negocio?',
            'dimension_id' => 4,
            'aspect_id' => 9,
        ]);
        Question::create([
            'title'    => '¿Se siente cómodo/a liderando y atrevesando procesos de cambios?',
            'dimension_id' => 4,
            'aspect_id' => 10,
        ]);
        Question::create([
            'title'    => '¿Explora y conoce variedad de temas, poniéndolo a disposición ante la generación de soluciones? ',
            'dimension_id' => 5,
            'aspect_id' => 11,
        ]);
        Question::create([
            'title'    => 'Ante situaciones nuevas, combina dos o mas ideas dispares logrando crear algo nuevo y creativo?',
            'dimension_id' => 5,
            'aspect_id' => 12,
        ]);
        Question::create([
            'title'    => 'Ante una situación compleja organiza la información haciéndola simple y comprensibles para poder abordarla?',
            'dimension_id' => 5,
            'aspect_id' => 13,
        ]);
        Question::create([
            'title'    => 'En contextos inciertos ¿ajusta sus enfoques rápidamente y toma decisiones?',
            'dimension_id' => 5,
            'aspect_id' => 14,
        ]);
        Question::create([
            'title'    => '¿Reflexiona sobre las cosas que no salieron bien y genera aprendizajes para futuras implementaciones?',
            'dimension_id' => 5,
            'aspect_id' => 15,
        ]);
        Question::create([
            'title'    => '¿Lee la situación y ajusta su comportamiento a lo que es mas oportuno? (ej: cuándo es mejor ceder, cuándo momento de actuar)',
            'dimension_id' => 6,
            'aspect_id' => 16,
        ]);
        Question::create([
            'title'    => '¿Puede comunicarse de manera asertiva, adaptandose a los perfiles y personas con las cuales interactúa?',
            'dimension_id' => 6,
            'aspect_id' => 17,
        ]);
        Question::create([
            'title'    => 'Ante situaciones conflictivas, ¿enfrenta los hechos los gestiona y logra resolver de manera positiva?',
            'dimension_id' => 6,
            'aspect_id' => 18,
        ]);
        Question::create([
            'title'    => '¿Se mueve con comodidad en grupos diversos, donde se combinan distintas experiencias, conocimientos y niveles jerárquicos?',
            'dimension_id' => 6,
            'aspect_id' => 19,
        ]);
        Question::create([
            'title'    => '¿Inspira a los demás, impulsando el desarrollo de los equipos y las personas?',
            'dimension_id' => 6,
            'aspect_id' => 20,
        ]);
        Question::create([
            'title'    => '¿Entrega resultados frecuentemente, incluso en situaciones nuevas, exigentes, adversas o de escaces de recursos?',
            'dimension_id' => 7,
            'aspect_id' => 21,
        ]);
        Question::create([
            'title'    => '¿Se desafía a sí mismo fijándose metas ambiciosas y se esfuerza para lograrlas?',
            'dimension_id' => 7,
            'aspect_id' => 22,
        ]);
        Question::create([
            'title'    => '¿Se siente impulsado por los resultados y las tareas dificultosas lo energizan?',
            'dimension_id' => 7,
            'aspect_id' => 23,
        ]);
        Question::create([
            'title'    => '¿Encuentra múltiples formas de resolver los problemas, ideando nuevos enfoques, sorteando los obstáculos?',
            'dimension_id' => 7,
            'aspect_id' => 24,
        ]);
        Question::create([
            'title'    => '¿En el trabajo con otros, enrola al equipo y los moviliza hacia logro de resultados?',
            'dimension_id' => 7,
            'aspect_id' => 25,
        ]);
    }
}
