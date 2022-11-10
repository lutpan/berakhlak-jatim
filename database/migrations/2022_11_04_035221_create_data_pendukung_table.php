<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPendukungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendukung', function (Blueprint $table) {
            $table->id('id_data_pendukung');
            $table->foreignId('id_content');
            $table->text('sk-tim')->nullable();
            $table->text('anggaran')->nullable();
            $table->text('sop')->nullable();
            $table->text('dok-pembangunan')->nullable();
            $table->text('link')->nullable();
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
        Schema::dropIfExists('data_pendukung');
    }
}
