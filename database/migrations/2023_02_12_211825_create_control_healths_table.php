<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_healths', function (Blueprint $table) {
            $table->id();
            $table->string('nomAlumno');
            $table->bigInteger('numDocumento')->unique();
            $table->string('edadAlumno');
            $table->date('examenMedico')->nullable();
            $table->date('examenVisual')->nullable();
            $table->date('examenAuditivo')->nullable();
            $table->date('examenOdontologico')->nullable();
            $table->date('cdActual')->nullable();
            $table->date('cdProximo')->nullable();
            $table->date('cdEntregado')->nullable();
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
        Schema::dropIfExists('control_healths');
    }
}
