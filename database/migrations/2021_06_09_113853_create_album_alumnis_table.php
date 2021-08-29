<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_album');
            $table->string('angkatan');
            $table->string('gambar_album');
            $table->string('header_album');
            $table->string('tahun_terbit');
            $table->integer('hapus')->default(0);
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
        Schema::dropIfExists('album_alumnis');
    }
}
