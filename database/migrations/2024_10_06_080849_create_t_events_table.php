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
        Schema::create('t_events', function (Blueprint $table) {
            $table->id('event_id'); 
            $table->string('event_name', 60); 
            $table->date('event_date'); 
            $table->string('location', 60);
            $table->Integer('host_employee_id')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_events');
    }
};
