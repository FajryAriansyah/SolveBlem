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
        Schema::create('problem', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->foreignId('author')->nullable();
            $table->string('batas_waktu');
            $table->string('batas_memori');
            $table->text('deskripsi');
            $table->text('format_input');
            $table->text('format_output');
            $table->text('contoh_input');
            $table->text('contoh_output');
            $table->text('case_input');
            $table->text('case_output');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problem');
    }
};
