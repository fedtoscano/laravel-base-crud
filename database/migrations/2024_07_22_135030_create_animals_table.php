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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('Nome')->nullable();
            $table->string('Specie');
            $table->string('Sesso');
            $table->integer('Età');
            $table->date('Data_di_Arrivo');
            $table->decimal('Peso', 8, 2);
            $table->string('Habitat');
            $table->string('Salute');
            $table->text('Note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
