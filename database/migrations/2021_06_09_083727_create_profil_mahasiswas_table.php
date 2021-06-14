<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('prodi');
            $table->string('alamat');
            $table->string('lama_studi');
            $table->string('judul_laporan');
            $table->string('tahun_lulus');
            $table->string('angkatan');
            $table->integer('user_id');
            $table->integer('ipk');
            $table->string('foto');
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
        Schema::dropIfExists('profil_mahasiswas');
    }
}
