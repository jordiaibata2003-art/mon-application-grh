<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('nomUtilisateur');
            $table->string('email')->unique();
            $table->string('motDePasse');
            $table->string('statut')->default('actif');
            $table->foreignId('profil_id')->nullable()->constrained('profils');
            $table->foreignId('employe_id')->nullable()->constrained('employes');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};