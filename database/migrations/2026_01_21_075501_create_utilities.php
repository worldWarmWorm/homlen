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
        Schema::create('utilities', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            $table->uuid('provider_id');
            $table->string('name');
            $table->decimal('tax')->nullable();
            $table->string('measure');
            $table->string('measure_description');
            $table->string('html_selector')->nullable();
            $table->boolean('is_actual')->default(false);
            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utility');
    }
};
