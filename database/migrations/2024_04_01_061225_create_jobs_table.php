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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->string('Name');
            $table->string('Salary');
            $table->string('Description');
            $table->string('Skill')->nullable();
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('location');
            $table->foreign('company_id')->references('id')->on('company');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
