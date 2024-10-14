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
        Schema::create('basic_infos', function (Blueprint $table) {
            $table->id();
            $table->text('user_id');
            $table->text('name');
            $table->text('jobTitle');
            $table->text('email');
            $table->text('phoneNumber');
            $table->text('address');
            $table->text('country');
            $table->text('linkedin')->nullable();
            $table->text('github')->nullable();
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basic_infos');
    }
};
