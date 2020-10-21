<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTestingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->delete();

        $json = File::get("database/data/users_testing.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            User::create(array(
                'id'                  => $obj->id,
                'lastname'            => $obj->lastname,
                'name'                => $obj->name,
                'position'            => $obj->position,
                'position_group'      => $obj->position_group,
                'position_class'      => $obj->position_class,
                'organizational_unit' => $obj->organizational_unit,
                'cost_center'         => $obj->cost_center,
                'chief_id'            => $obj->chief_id,
                'email'               => $obj->email,
                'managment'           => $obj->managment,
                'password'            => bcrypt($obj->password),
            ));
        }
    }
}
