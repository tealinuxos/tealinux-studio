<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Build extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('builds', function(Blueprint $table)
      {
        $table->increments('id');
        $table -> integer('task_id') -> unsigned() -> default(0);
        $table->foreign('task_id')
            ->references('id')->on('tasks')
            ->onDelete('cascade');

        $table->boolean('sudah_jadi');
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
        Schema::drop('builds');
    }
}
