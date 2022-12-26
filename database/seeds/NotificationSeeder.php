<?php

use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_notifications')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'rate_id' => '2',
            'type' => '1',
            'approve' => '0',
            'read' => '0',
            'anonymous' => '1',
        ]);
        DB::table('tk_notifications')->insert([
            'user_id' => '1',
            'by_id' => '2',
            'rate_id' => '2',
            'type' => '2',
            'approve' => '0',
            'read' => '0',
            'anonymous' => '0',
        ]);
    }
}
