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
        Schema::table('directivos', function (Blueprint $table) {
            $table->renameColumn('name', 'nombre_materia');
            $table->integer('total_alumnos')->default(0)->after('nombre_materia');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('directivos', function (Blueprint $table) {
            $table->dropColumn('total_alumnos');
            $table->renameColumn('nombre_materia', 'name');
        });
    }
};
