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
    Schema::create('locations', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('province_id');
      $table->unsignedBigInteger('municipality_id');
      $table->unsignedBigInteger('barangay_id');
      $table->unsignedBigInteger('street_name_id');
      $table->string('map_pin')->nullable();
      $table->unsignedTinyInteger('type_of_delivery')->default(1)->comment('1-home|2-work|3-other');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('locations');
  }
};
