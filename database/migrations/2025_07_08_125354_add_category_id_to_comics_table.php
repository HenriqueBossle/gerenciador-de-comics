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
        Schema::table('comics', function (Blueprint $table) {
        // Adiciona a coluna e a chave estrangeira
        $table->foreignId('category_id')
              ->nullable()
              ->constrained()
              ->onDelete('SET NULL');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
           $table->dropForeign(['category_id']);
           $table->dropColumn('category_id');
        });
    }
};
