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
        Schema::create('usaha', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('judul_usaha');
            $table->text('deskripsi_usaha');
            $table->bigInteger('target_biaya');
            $table->bigInteger('biaya');
            $table->integer('jaminan');
            $table->date('tenggat');
            $table->json('pemodal')->nullable();
            $table->json('jumlah_modal')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usaha');
    }
};
