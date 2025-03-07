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
        Schema::create('sync', function (Blueprint $table) {
            $table->id();
            $table->string('m_uuid')->nullable();
            $table->bigInteger('m_id');
            $table->string('model');
            $table->tinyInteger('status')->default(0);
            $table->bigInteger('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sync');
    }
};
