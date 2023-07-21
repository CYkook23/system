<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            
             //campos para la relacion con las tablas users y categories

             $table->bigInteger('departamento_id')-> unsigned();
             
 
             //relacion mediante las llaves foraneas
 
             $table->foreign('departamento_id')-> references('id')->on('departamentos')->onDelete('cascade');
            
 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades');
    }
};
