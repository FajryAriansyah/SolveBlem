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
        Schema::create('contest_user', function (Blueprint $table) {
            $table->unsignedBigInteger('contest_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('contest_id')->references('id')->on('contests')->onDelete('cascade'); // akan dihapus begitu problemnya dihapus
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // akan dihapus begitu problemnya dihapus
      
            $table->integer('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contest_user');
    }
};
