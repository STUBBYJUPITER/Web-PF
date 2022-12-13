<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user model
        $user = new User();
        $user->name = 'pepe';
        $user->last_name = 'aguilar';
        $user->last_name2 = 'gonzales';
        $user->email = 'pepe@uabcs.mx';
        $user->password = bcrypt('password');
        $user->blood_type ='o+';
        $user->date =date($format = 'Y-m-d', $max = 'now');
        $user->save();
    }
}
