<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsip', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori');
            $table->string('no_arsip');
            $table->string('nama_arsip');
            $table->text('deskripsi');
            $table->date('tanggal_upload');
            $table->date('tanggal_update');
            $table->string('file_arsip');
            $table->integer('id_jabatan');
            $table->integer('id_user');
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
        Schema::dropIfExists('arsip');
    }
}
