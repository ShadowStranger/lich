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
        Schema::create('liches', function (Blueprint $table) {
            $table->id();
            $table->string('stringi');
            $table->text('nuni');
            $table->unsignedBigInteger('valerki');
            $table->boolean('is_gay');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liches');
    }
};
