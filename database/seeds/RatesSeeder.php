<?php

use Illuminate\Database\Seeder;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_rates')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'extra' => 'الله يوفقك',
            'anonymous' => '1',
            'avg' => '5',
        ]);

        DB::table('tk_rates')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'anonymous' => '0',
            'avg' => '3',
        ]);

        DB::table('tk_rates')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'anonymous' => '0',
            'avg' => '2',
        ]);

        DB::table('tk_rates')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'anonymous' => '0',
            'avg' => '4',
        ]);
        DB::table('tk_rates')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'anonymous' => '0',
            'avg' => '1',
        ]);

        DB::table('tk_rates')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'anonymous' => '0',
            'avg' => '0',
        ]);


    }
}
