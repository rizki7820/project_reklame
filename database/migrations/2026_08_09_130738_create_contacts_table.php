<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();

            $table->string('nama')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('instagram')->nullable();

            $table->text('alamat')->nullable();
            $table->string('jam_operasional')->nullable();

            $table->string('maps_url')->nullable();
            $table->string('whatsapp_url')->nullable();

            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
