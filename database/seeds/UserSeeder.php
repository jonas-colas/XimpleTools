<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'lastname'            => 'Barón',
            'name'                => 'Guillermo',
            'position'            => 'SYSADMIN',
            'position_group'      => 'SENIOR',
            'position_class'      => 'SR AREA INTERNA',
            'organizational_unit' => 'SELECCIÓN',
            'cost_center'         => 'SELECCIÓN',
            'chief_id'            => 0,
            'managment'           => 'GERENCIA DE DESARROLLO ORGANIZACIONAL',
            'email'               => 'guillermobaron@gmail.com',
            'password'            => bcrypt('1029384756'),
        ]);
    }
}
