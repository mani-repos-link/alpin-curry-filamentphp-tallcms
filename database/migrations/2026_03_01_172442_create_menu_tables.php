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
        Schema::create('food_ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description_en')->nullable();
            $table->text('description_it')->nullable();
            $table->text('description_de')->nullable();
            $table->string('status', 20)->default('active');
            $table->integer('order')->default(5);
            $table->timestamps();
        });

        Schema::create('food_allergies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_it')->nullable();
            $table->text('description_de')->nullable();
            $table->string('status', 20)->default('active');
            $table->integer('order')->default(5);
            $table->timestamps();
        });

        Schema::create('food_intolerances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('key')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_it')->nullable();
            $table->text('description_de')->nullable();
            $table->string('status', 20)->default('active');
            $table->integer('order')->default(5);
            $table->timestamps();
        });

        Schema::create('food_menu_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description_en')->nullable();
            $table->text('description_it')->nullable();
            $table->text('description_de')->nullable();
            $table->string('display_type', 40)->default('off');
            $table->string('status', 20)->default('active');
            $table->integer('order')->default(5);
            $table->timestamps();
        });

        Schema::create('food_menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_menu_category_id')->constrained('food_menu_categories')->onDelete('cascade');
            $table->string('name');
            $table->text('description_en')->nullable();
            $table->text('description_it')->nullable();
            $table->text('description_de')->nullable();
            $table->string('price', 20)->default('0.00');
            $table->string('status', 20)->default('active');
            $table->integer('order')->default(5);
            $table->timestamps();
        });

        Schema::create('food_allergy_food_menu_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_allergy_id')->constrained('food_allergies')->onDelete('cascade');
            $table->foreignId('food_menu_item_id')->constrained('food_menu_items')->onDelete('cascade');
        });

        Schema::create('food_intolerance_food_menu_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_intolerance_id')->constrained('food_intolerances')->onDelete('cascade');
            $table->foreignId('food_menu_item_id')->constrained('food_menu_items')->onDelete('cascade');
        });

        Schema::create('food_ingredient_food_menu_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('food_ingredient_id')->constrained('food_ingredients')->onDelete('cascade');
            $table->foreignId('food_menu_item_id')->constrained('food_menu_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_ingredient_food_menu_item');
        Schema::dropIfExists('food_intolerance_food_menu_item');
        Schema::dropIfExists('food_allergy_food_menu_item');
        Schema::dropIfExists('food_menu_items');
        Schema::dropIfExists('food_menu_categories');
        Schema::dropIfExists('food_intolerances');
        Schema::dropIfExists('food_allergies');
        Schema::dropIfExists('food_ingredients');
    }
};
