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
        //
        Schema::dropIfExists('vacancies');

        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('position', length: 150);
            $table->string('location', length: 150);
            $table->text('description');
            $table->string('schedule', length: 255);
            $table->text('requirements');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('vacancies');
    }
};
