<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tk_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('user_id')->unsigned();
            $table->integer('by_id')->unsigned();
            $table->integer('rate_id')->unsigned();
            $table->integer('read')->default('0');
            $table->integer('approve')->default('0');
            $table->boolean('anonymous');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tk_notifications');
    }
}
