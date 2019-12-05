<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarafKehidupansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('taraf_kehidupan', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('taraf_kehidupan');
        //     $table->timestamps();
        // });

        // Schema::table('kartu_keluarga', function (Blueprint $table) {
        //     $table->integer('taraf_kehidupan_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taraf_kehidupans');
    }
}
