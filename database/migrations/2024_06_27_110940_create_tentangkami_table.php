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
        Schema::create('tentangkami', function (Blueprint $table) {
            $table->increments('tentang_id'); // Kolom publikasi_id sebagai primary key dengan tipe data int
            $table->string('title', 100);
            $table->text('content');
            $table->string('photo', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tentangkami');
    }
};
