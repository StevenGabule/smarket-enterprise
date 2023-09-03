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
    Schema::create('street_names', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->integer('estimated_distance');
      $table->integer('time_travel');
      $table->unsignedBigInteger('barangay_id');
      $table->float('delivery_fee', 8, 2);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('street_names');
  }
};
