<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('vendors', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('vendor_code');
      $table->string('fb_link')->nullable();
      $table->unsignedBigInteger('location_id');
      $table->string('email')->unique();
      $table->string('phone_number')->unique();
      $table->string('telephone_number')->nullable();
      $table->string('owner_name')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('vendors');
  }
};
