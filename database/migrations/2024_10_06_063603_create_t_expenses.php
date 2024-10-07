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
        Schema::create('t_expenses', function (Blueprint $table) {
            $table->id('expense_id'); 
            $table->string('expense_category'); 
            $table->decimal('amount', 10, 2); 
            $table->date('date_incurred'); 
            $table->integer('employee_id'); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_expenses'); 
    }
};
