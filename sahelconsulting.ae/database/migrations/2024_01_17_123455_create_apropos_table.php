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
        Schema::create('apropos', function (Blueprint $table) {
            $table->id();
            $table->text('histoire');
            $table->text('expertise');
            $table->text('vision');
            $table->text('approche');
            $table->string('imageh')->nullable();
            $table->string('imagee')->nullable();
            $table->string('imagev')->nullable();
            $table->string('imagea')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apropos');
    }
};
