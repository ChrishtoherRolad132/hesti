<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_dosens', function (Blueprint $table) {
            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('unit_kerja');
            $table->integer('k1');
            $table->integer('k2');
            $table->integer('k3');
            $table->integer('k4');
            $table->integer('k5');
            $table->integer('k6');
            $table->integer('k7');
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
        Schema::dropIfExists('data_dosens');
    }
}
