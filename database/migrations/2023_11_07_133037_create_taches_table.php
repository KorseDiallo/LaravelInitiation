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
        
        Schema::create('taches', function (Blueprint $table) {
            $table->id();
            $table->string("nom_tache",50);
            $table->string("description_tache")->nullable();
            $table->date("date_echeance")->nullable();
            $table->boolean("is_terminer")->default(false);
            $table->enum("priorite",["haute","moyenne","faible"]);
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
        Schema::dropIfExists('taches');
    }
};
