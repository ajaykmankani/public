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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("boe")->nullable();
            $table->string("dob")->nullable();
            $table->string("age_group")->nullable();
            $table->string("adhar")->nullable();
            $table->string("pan")->nullable();
            $table->string("experience")->nullable();
            $table->string("trading_goal")->nullable();
            $table->string("trading_amount")->nullable();
            $table->string("trading_type")->nullable();
            $table->string("annual_income")->nullable();
            $table->string("income_source")->nullable();
            $table->string("investment")->nullable();
            $table->string('resource')->nullable();
            $table->string("earning_person")->nullable();
            $table->string("dependent_family")->nullable();
            $table->string("existing_investment")->nullable();
            $table->string("emergency")->nullable();
            $table->string("total_exist_investment")->nullable();
            $table->string("preferred_segment")->nullable();
            $table->string("preference")->nullable();
            $table->string("agreecheck")->nullable();
            $table->string("pdf")->nullable();
            $table->string("btnRiskProfileSubmit")->nullable();
            $table->string("client_ip")->nullable();
            $table->string("adhaar_card_front")->nullable();
            $table->string("adhaar_card_back")->nullable();
            $table->string("pan_card")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
