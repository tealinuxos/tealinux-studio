<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('apps', function(Blueprint $table)
      {
        $table->increments('id');
        $table -> integer('user_id') -> unsigned() -> default(0);
        $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        $table->string('nama_aplikasi')->unique();
        $table->string('versi_aplikasi');

        $table->enum('kategori',['internet','chat','music','video', 'graphics','game','office','reading','development','system','other'])->default('other');
        $table->text('deskripsi');

        $table->string('nama_file_aplikasi')->unique();

        $table->string('ukuran_file');
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
      Schema::drop('apps');

    }
}
