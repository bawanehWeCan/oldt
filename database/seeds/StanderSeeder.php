<?php

use Illuminate\Database\Seeder;

class StanderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_standers')->insert([
            'name' => 'الجمال',
        ]);
        DB::table('tk_standers')->insert([
            'name' => 'الشخصيه',
        ]);
        DB::table('tk_standers')->insert([
            'name' => 'الاسلوب',
        ]);
        DB::table('tk_standers')->insert([
            'name' => 'الذكاء',
        ]);
    }
}
