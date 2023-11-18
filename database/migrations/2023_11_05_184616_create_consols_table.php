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
        Schema::create('consols', function (Blueprint $table) {
            $table->id();
            $table->string('name'); //nome console
            $table->string('creator');//chi ha creato la console
            $table->string('logo');//img console
            $table->text('info');//informazione
            $table->date('data');// data creazione console
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consols');
    }
};
