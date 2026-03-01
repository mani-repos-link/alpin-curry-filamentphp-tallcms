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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone', 40);
            $table->unsignedTinyInteger('guests');
            $table->date('reservation_date');
            $table->time('reservation_time');
            $table->text('message')->nullable();
            $table->string('status', 20)->default('pending');
            $table->string('source', 20)->default('website');
            $table->timestamps();

            $table->index(['reservation_date', 'reservation_time']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
