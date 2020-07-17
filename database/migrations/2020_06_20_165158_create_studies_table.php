<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studies', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('date_init');
            $table->string('date_finish');
            $table->enum('status', ['Finalizado', 'Em atraso', 'Em andamento']);

            $table->bigInteger('area_id')->unsigned();
            $table->foreign('area_id')
                ->references('id')
                ->on('areas');

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
        Schema::dropIfExists('studies');
    }
}
