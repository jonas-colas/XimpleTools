<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(UserTestingSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(DimensionSeeder::class);
        $this->call(AspectSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ThreadSeeder::class);
        $this->call(EvaluationSeeder::class);
    }
}
