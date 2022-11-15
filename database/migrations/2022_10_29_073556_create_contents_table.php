<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id('id_content');
            $table->foreignId('id_user');
            $table->foreignId('id_kategori');
            $table->string('image')->nullable();
            $table->string('nama_budaya_kerja');
            $table->string('path');
            // $table->string('kategori');
            $table->text('latar_belakang');
            $table->text('tujuan')->nullable();
            $table->text('sasaran')->nullable();
            $table->text('kondisi_sebelum')->nullable();
            $table->text('implementasi')->nullable();
            $table->text('kondisi_sesudah')->nullable();
            $table->text('manfaat')->nullable();
            $table->text('peran_pimpinan')->nullable();
            $table->text('monev')->nullable();
            $table->text('link')->nullable();
            #dokumen
            $table->text('sk-tim')->nullable();
            $table->text('anggaran')->nullable();
            $table->text('sop')->nullable();
            $table->text('dok-pembangunan')->nullable();
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
        Schema::dropIfExists('contents');
    }
}
