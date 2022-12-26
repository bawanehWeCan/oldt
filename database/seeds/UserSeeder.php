<?php

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
        DB::table('tk_users')->insert([
            'name' => 'Alaa',
            'username' => 'alaa',
            'email' => 'bawanehcoder@live.com',
            'password' => Hash::make('1038138__'),
            'image'=>'',
            'provider'=>'',
            'provider_id'=>'',
        ]);

        
    }
}
