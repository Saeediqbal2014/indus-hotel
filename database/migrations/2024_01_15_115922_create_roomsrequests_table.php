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
        Schema::create('roomsrequests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('phone');
            $table->string('email');
            $table->string('country');
            $table->string('checkin');
            $table->string('checkout');
            $table->string('adults');
            $table->string('children');
            $table->string('room');

            $table->longText('special_arrangments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomsrequests');
    }
};
