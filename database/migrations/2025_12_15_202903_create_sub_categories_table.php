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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('name');
            $table->string('slug');
            $table->text('short_desc')->nullable();

            $table->string('desc_title')->nullable();
            $table->longText('description')->nullable();

            $table->longText('doc_notes')->nullable();
            $table->string('image')->nullable();

            $table->boolean('key_service')->default(false);
            $table->boolean('useful_service')->default(false);
            $table->boolean('is_govt_sector')->default(false);
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('sort_order')->default(0);
            $table->timestamps();

            $table->unique(['category_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
