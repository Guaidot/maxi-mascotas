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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('especie',30);
            $table->string('raza',100)->nullable();
            $table->date('fecha_nacimiento');
            $table->enum('genero', ['M', 'F']);

            //Integridad Referencial de Pressman
            $table->foreignId('dueno_id')
                  ->constrained('duenos') //garantiza que la tabla dueños existas
                  ->onDelete('cascade'); // si borramos al dueño, su mascota tambien se borra 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
