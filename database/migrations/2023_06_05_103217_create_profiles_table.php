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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('namaFromTableProfile');
            $table->string('gambarFromTableProfile')->nullable();
            $table->string('alamatFromTableProfile');
            $table->string('emailFromTableProfile');
            $table->string('teleponFromTableProfile');
            $table->string('aboutFromTableProfile');
            $table->string('excerptFromTableProfile');
            $table->text('bodyFromTableProfile');
            $table->string('slugFromTableProfile')->unique();
            $table->string('titleVisiMisiFromTableProfile');
            $table->string('excerptVisiMisiFromTableProfile');
            $table->text('bodyVisiMisiFromTableProfile');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};