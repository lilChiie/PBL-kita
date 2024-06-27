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
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('kegiatan_id'); // Primary key dengan auto-increment
            $table->string('title', 100);
            $table->text('description');
            $table->string('photo', 100);
            $table->string('location', 100);
            $table->decimal('price', 10, 0);
            $table->integer('slot');
            $table->date('date');
            $table->string('category', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatan');
    }
};
