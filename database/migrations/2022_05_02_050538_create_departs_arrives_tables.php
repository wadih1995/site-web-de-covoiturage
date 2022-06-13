<?php
   
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
   
class CreateDepartsArrivesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departs', function (Blueprint $table) {
            $table->id();
            $table->string('endroit_depart');
            $table->timestamps();
        });
   
        Schema::create('arrives', function (Blueprint $table) {
            $table->id();
            $table->integer('depart_id');
            $table->string('endroit_arrive');
            $table->text('distance');
            $table->text('prix');
            $table->text('duree');
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
        Schema::dropIfExists('departs');
        Schema::dropIfExists('arrives');
    }
}