<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_service_category', function (Blueprint $table) {

            $table->foreignId('portfolio_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('service_category_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->primary([
                'portfolio_id',
                'service_category_id'
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_service_category');
    }
};
