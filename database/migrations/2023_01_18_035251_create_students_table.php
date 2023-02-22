<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nivel');
            $table->date('fechaMatricula');
            $table->string('nomAlumno');
            $table->date('fechaNacimiento');
            $table->string('genero');
            $table->string('EdadAlumno');
            $table->string('documentType');
            $table->bigInteger('numDocumento')->unique();
            $table->string('Esalud');
            $table->string('EPS');
            $table->bigInteger('numTelefonico');
            $table->bigInteger('numTelefonicoUno')->nullable();
            $table->bigInteger('numTelefonicoDos')->nullable();
            $table->string('direccionAlumno');
            $table->string('barrio');
            $table->string('localidad');
            $table->string('nombreMama');
            $table->bigInteger('documentoMama');
            $table->bigInteger('telefonoMama');
            $table->string('direccionMama');
            $table->string('correoMama')->nullable();
            $table->string('nombrePapa');
            $table->bigInteger('documentoPapa');
            $table->bigInteger('telefonoPapa');
            $table->string('direccionPapa');
            $table->string('correoPapa')->nullable();
            $table->string('nomPriRes');
            $table->bigInteger('docPriRes');
            $table->string('dirPriRes');
            $table->bigInteger('telPriRes');
            $table->string('nomSegRes');
            $table->bigInteger('docSegRes');
            $table->string('dirSegRes');
            $table->bigInteger('telSegRes');
            $table->string('nomTerRes')->nullable();
            $table->bigInteger('docTerRes')->nullable();
            $table->string('dirTerRes')->nullable();
            $table->bigInteger('telTerRes')->nullable();
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
        Schema::dropIfExists('students');
    }
}
