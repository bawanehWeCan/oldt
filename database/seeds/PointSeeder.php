<?php

use Illuminate\Database\Seeder;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_points')->insert([
            'rate_id' => '1',
            'stander' => 'الجمال',
            'points' => '5',
        ]);
        DB::table('tk_points')->insert([
            'rate_id' => '1',
            'stander' => 'الشخصيه',
            'points' => '5',
        ]);
        DB::table('tk_points')->insert([
            'rate_id' => '1',
            'stander' => 'الذكاء',
            'points' => '5',
        ]);
        DB::table('tk_points')->insert([
            'rate_id' => '1',
            'stander' => 'الذكاء',
            'points' => '5',
        ]);
        DB::table('tk_points')->insert([
            'rate_id' => '1',
            'stander' => 'الذكاء',
            'points' => '5',
        ]);
   
        
        
    }
}
