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
        Schema::create('coachings', function (Blueprint $table) {
            $table->id();
            $table->string('current_level');
            $table->string('desired_level');
            $table->string('solo_play');
            $table->string('priority_order');
            $table->string('play_with_booster');
            $table->string('name');
            $table->string('skype_id');
            $table->string('discord_username');
            $table->string('available_time');
            $table->text('account_data');
            $table->string('payment_method');
            $table->string('total_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coachings');
    }
};