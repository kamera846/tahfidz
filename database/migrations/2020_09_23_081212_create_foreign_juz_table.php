<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignJuzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('juz', function (Blueprint $table) {
            $table->integer('santri_id')->unsigned()->change();
            $table->foreign('santri_id')
                ->references('id')
                ->on('santri')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('juz', function (Blueprint $table) {
            $table->dropForeign('juz_santri_id_foreign');
        });
    }
}
