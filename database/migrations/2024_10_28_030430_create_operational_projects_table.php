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
        Schema::create('operational_projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('deal_project_id');
            $table->foreign('deal_project_id')->references('id')->on('deal_projects')->onDelete('cascade')->onUpdate('cascade');
            $table->string('lokasi', 200)->nullable();
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operational_projects');
    }
};