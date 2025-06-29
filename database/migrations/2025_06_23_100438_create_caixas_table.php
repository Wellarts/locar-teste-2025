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
        Schema::create('caixas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique();
            $table->string('descricao', 255)->nullable();
            $table->decimal('saldo_atual', 10, 2)->default(0.00);
            $table->boolean('ativo')->default(true);
            $table->foreignId('banco_id')->nullable()->constrained('bancos')->nullOnDelete();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caixas');
    }
};
