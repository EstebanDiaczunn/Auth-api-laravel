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
        Schema::create('UserContactInformation', function (Blueprint $table) {
            $table->unsignedBigInteger('userIdContactInformation');
            $table->foreign('userIdContactInformation')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('zipCode');
            $table->string('city');
            $table->string('stateProvince');
            $table->string('country');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('UserContactInformation');
    }
};
