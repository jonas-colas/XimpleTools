<?php

use Illuminate\Database\Seeder;
use App\Models\Thread;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->delete();

        $thread = Thread::create([
            'title' => 'Perfil Profesional',
            'scale' => 0,
            ]);
        $thread->questions()->sync([1,2,3,4,5,6]);
        $thread = Thread::create([
            'title' => 'Conciencia de si mismo',
            'scale' => 1,
            ]);
        $thread->questions()->sync([7,8,9,10,11]);
        $thread = Thread::create([
            'title' => 'Agilidad de Cambio',
            'scale' => 1,
            ]);
        $thread->questions()->sync([12,13,14,15,16]);
        $thread = Thread::create([
            'title' => 'Agilidad Mental',
            'scale' => 1,
            ]);
        $thread->questions()->sync([17,18,19,20,21]);
        $thread = Thread::create([
            'title' => 'Agilidad Interpersonal',
            'scale' => 1,
            ]);
        $thread->questions()->sync([22,23,24,25,26]);
        $thread = Thread::create([
            'title' => 'Agilidad de Resultados',
            'scale' => 1,
            ]);
        $thread->questions()->sync([27,28,29,30,31]);
    }
}
