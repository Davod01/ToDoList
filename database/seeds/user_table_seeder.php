<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name'=> 'Davod',
                'email'=>'davod.nar@gmail.com',
                'password'=>Hash::make('123456')
            ],
            [
                'name'=> 'navid',
                'email'=>'navid.nar@gmail.com',
                'password'=>Hash::make('123456')
            ],
            [
                'name'=> 'soheil',
                'email'=>'soheil.nar@gmail.com',
                'password'=>Hash::make('123456')
            ],
        ]);
    }
}
