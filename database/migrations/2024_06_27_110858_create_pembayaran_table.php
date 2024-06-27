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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('pembayaran_id');
            $table->unsignedInteger('kegiatan_id');
            $table->unsignedInteger('user_id');
            $table->string('photo', 100);
            $table->string('status', 100)->default('Belum di konfirmasi');
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();

            // Foreign key constraints
            $table->foreign('kegiatan_id')->references('kegiatan_id')->on('kegiatan')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
