<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHafalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('santri_id');
            $table->unsignedBigInteger('halaman_id');
            $table->date('tanggal');
            $table->unsignedBigInteger('ustadz_id');
            $table->foreign('santri_id')->references('id')->on('santri')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('halaman_id')->references('id')->on('halaman')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ustadz_id')->references('id')->on('ustadz')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExist('hafalan');
    }
}
