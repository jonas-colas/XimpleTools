<?php

use Illuminate\Database\Seeder;
use App\Models\Evaluation;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->delete();

        $evaluation = Evaluation::create([
            'title'        => 'Autoevaluación 2020',
            'publish_date' => '2020-09-01',
            'expire_date'  => '2020-10-31',
            'status'       => 1,
            'type'         => 0,
            'user_id'      => 1,
            ]);
        $evaluation->threads()->sync([1,2,3,4,5,6]);

        $evaluation = Evaluation::create([
            'title'        => 'Evaluación Equipo 2020',
            'publish_date' => '2020-11-01',
            'expire_date'  => '2020-11-30',
            'status'       => 0,
            'type'         => 1,
            'user_id'      => 1,
            ]);
        $evaluation->threads()->sync([1,2,3,4,5,6]);
    }
}
