<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tk_comments')->insert([
            'rate_id' => '1',
            'comment' => 'aaaaaaaaaaaaaa',
            'sender_id' => '1',
        ]);
        DB::table('tk_comments')->insert([
            'rate_id' => '1',
            'comment' => 'bbbbbbbbbbbbbb',
            'sender_id' => '2',
        ]);
    }
}
