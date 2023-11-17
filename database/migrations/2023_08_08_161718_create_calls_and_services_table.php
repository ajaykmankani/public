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
        Schema::create('calls_and_services', function (Blueprint $table) {
            $table->id();
            $table->string('call_name')->nullable();
            $table->string('call_link')->nullable();
            $table->text('call_text')->nullable();
            $table->text('follow_up')->nullable();
            $table->string('call_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calls_and_services');
    }
};
