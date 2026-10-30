<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('paies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employe_id')->constrained('employes')->onDelete('cascade');
            $table->integer('mois');
            $table->integer('annee');
            $table->decimal('salaireBase', 10, 2);
            $table->decimal('prime', 10, 2)->default(0);
            $table->decimal('heuresSupplementaires', 10, 2)->default(0);
            $table->decimal('retenues', 10, 2)->default(0);
            $table->decimal('salaireNet', 10, 2);
            $table->string('statut')->default('preparer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paies');
    }
};