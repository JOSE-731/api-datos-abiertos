<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->integer('cd_departamento');       
            $table->integer('codigo_municipio');
            $table->string('nombre_municipio');  
            $table->foreignId('id_departamento')
                  ->nullable()->constrained('departamentos')
                  ->cascadeOnUpdate('departamentos')
                  ->cascadeOnDelete();                        

                                             // ->references('codigo_departamento')
                                              //->on('departamentos')
                                              //->onDelete("cascade")
                                              //->onUpdate("cascade");
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
        Schema::dropIfExists('municipios');
    }
}
