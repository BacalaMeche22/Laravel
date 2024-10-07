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
        Schema::create('t_projects', function (Blueprint $table) {
            $table->id('project_id'); 
            $table->string('project_name'); 
            $table->date('start_date'); 
            $table->date('end_date')->nullable(); 
            $table->string('status'); // e.g., pending, completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_projects');
    }
};
