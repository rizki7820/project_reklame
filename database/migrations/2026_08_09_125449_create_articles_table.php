<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('service_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('judul');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('konten')->nullable();
            $table->string('gambar')->nullable();

            $table->integer('urutan')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
