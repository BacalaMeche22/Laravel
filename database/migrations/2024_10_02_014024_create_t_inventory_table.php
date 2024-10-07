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
        Schema::create('t_inventory', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'item_name'); // Name of the item
            $table->string(column: 'item_quantity'); // Quantity
            $table->string(column: 'item_category'); // Category
            $table->timestamps(); // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_inventory');
    }
};
