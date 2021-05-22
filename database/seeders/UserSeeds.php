<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'fname'=>'elijah',
            'lname'=>'Sunwa',
            'fname'=>'elijah',
            'tscNumber'=>'12345',
            'IDNo'=>'30389040',
            'phone'=>'+254721729081',
            'email'=>'elijah@gmail.com',
            'gender'=>'Male',
            'notificationType'=>'SMS',
            'password'=>Hash::make('elijah')
        ]);
    }
}
