<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->constrained('employes')->onDelete('cascade');
            $table->date('date');
            $table->time('heureArrivee')->nullable();
            $table->time('heureDepart')->nullable();
            $table->string('statut')->default('present');
            $table->boolean('estJustifie')->default(false);
            $table->string('motifAbsence')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('presences');
    }
};