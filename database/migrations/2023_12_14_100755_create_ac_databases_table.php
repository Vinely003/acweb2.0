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
        Schema::create('ac_databases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ac_id');
            $table->string('ac_name');
            $table->string('ac_url');
            $table->text('ac_title');
            $table->longText('ac_text');
            $table->string('ac_image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ac_databases');
    }
};
