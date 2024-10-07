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
        Schema::create('t_customer', function (Blueprint $table) {
           $table->id(); // Auto-increment ID
            $table->string(column: 'cus_first_name'); // First Name of the Customer
            $table->string(column: 'cus_last_name'); // Last Name of the Customer
            $table->string(column: 'cus_email')->unique(); // Email address (must be unique)
            $table->string(column: 'cus_phone_number'); // Phone number
            $table->string(column: 'cus_address')->nullable(); // Address
            $table->string(column: 'cus_city')->nullable(); // City
            $table->string(column: 'cus_state')->nullable(); // State or region
            $table->string(column: 'cus_postal_code')->nullable(); // Postal code
            $table->string(column: 'cus_country')->nullable(); // Country
            $table->timestamps(); // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_customer');
    }
};
