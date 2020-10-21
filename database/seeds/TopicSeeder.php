<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->delete();

        Topic::create([
            'title' => 'Perfil Profesional',
        ]);
        Topic::create([
            'title' => 'Agilidad de Aprendizaje	',
        ]);
    }
}
