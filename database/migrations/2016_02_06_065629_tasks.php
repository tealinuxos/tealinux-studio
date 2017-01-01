<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tasks', function(Blueprint $table)
      {
        $table->increments('id');
        $table -> integer('user_id') -> unsigned() -> default(0);
        $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        $table->string('nama_os')->unique();
        $table->enum('arsiektur',['32','64'])->default('64');
        $table->text('deskripsi');
        $table->string('list_aplikasi');

        $table->string('theme');
        $table->string('icon');
        $table->string('wallpaper');
        $table->string('nama_file_iso');

        $table->string('slug')->unique(); // penamaan
        $table->boolean('status'); // 0 artinya belum jadi
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
        Schema::drop('tasks');
    }
}
