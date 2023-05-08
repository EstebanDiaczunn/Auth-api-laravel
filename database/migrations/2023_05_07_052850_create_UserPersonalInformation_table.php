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
        Schema::create('UserPersonalInformation', function (Blueprint $table) {
            $table->unsignedBigInteger('userIdPersonalInformation');
            $table->foreign('userIdPersonalInformation')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('name',50);
            $table->string('surname',50);
            $table->string('idKind');
            $table->string('idValue');
            $table->string('nationality');
            $table->datetime('birthDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('UserPersonalInformation');
    }
};
