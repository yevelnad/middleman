<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function(Blueprint $table){
          $table->increments('id');
          $table->string('name')->max(100);
          $table->text('description')->max(500);
          $table->integer('reward');
          $table->integer('user_id');
          $table->string('recipient');
          $table->boolean('status');
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
        //
    }
}
