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
        Schema::create('borrower_forms', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no')->unique(); // Add the reference number field
            $table->string('borrower_title');
            $table->string('borrower_name');
            $table->string('spouse_title')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('sex');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('home_address');
            $table->string('place_of_birth');
            $table->string('educational_attainment');
            $table->string('educational_status');
            $table->integer('age');
            $table->string('school')->nullable();
            $table->integer('height');
            $table->integer('weight');
            $table->string('picture')->nullable();
            $table->string('email');
            $table->string('amount_applied');
            $table->string('purpose');
            $table->string('business_name')->nullable();
            $table->string('business_address')->nullable();
            $table->string('business_contact_number')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('position')->nullable();
            $table->string('employer_contact_number')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('reference_relationship')->nullable();
            $table->string('reference_address')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrower_forms');
    }
};
