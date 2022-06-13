<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_arrives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('depart_id');
            $table->foreign('depart_id')->references('id')->on('point_departs')->onUpdate('cascade')->onDelete('cascade');
            $table->text('distance');
            $table->text('prix');
            $table->text('place_arrive');
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
        Schema::dropIfExists('point_arrives');
    }
};
