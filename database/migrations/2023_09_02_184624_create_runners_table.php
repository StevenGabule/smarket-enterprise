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
    Schema::create('runners', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('vendor_id');
      $table->string('code');
      $table->boolean('status')->default(true);
      $table->string('photo')->nullable();
      $table->string('driver_license_photo')->nullable();
      $table->string('driver_license_number')->nullable();
      $table->date('driver_license_expiration')->nullable();
      $table->string('color_of_vehicle')->nullable();
      $table->string('brand_of_vehicle')->nullable();
      $table->unsignedTinyInteger('type_of_vehicle')->nullable()->comment('bike|bicycle|car');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('runners');
  }
};
