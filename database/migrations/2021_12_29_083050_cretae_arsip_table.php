<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretaeArsipTable extends Migration
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
            $table->integer('no_arsip')->unique();
            $table->string('nama_arsip');
            $table->string('deskripsi')->nullable();
            $table->string('file_arsip')->nullable();
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
