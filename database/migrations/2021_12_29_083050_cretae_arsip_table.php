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
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kategori');
            $table->integer('no_arsip');
            $table->string('nama_arsip');
            $table->string('deskripsi');
            $table->string('file_arsip');
            $table->integer('id_user');
            $table->timestamp('created_at')->nullable();
            $table->timestamps('update_at')->nullable();
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
