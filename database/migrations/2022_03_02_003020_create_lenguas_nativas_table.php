<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguasNativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguas_nativas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_lengua');
            $table->foreignId('id_departamento')
                  ->nullable()->constrained('departamentos')
                  ->cascadeOnUpdate('departamentos')
                  ->cascadeOnDelete();  

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
        Schema::dropIfExists('lenguas_nativas');
    }
}
