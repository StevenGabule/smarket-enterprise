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
    Schema::create('runner_deliveries', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('order_id');
      $table->unsignedBigInteger('runner_id');
      $table->unsignedTinyInteger('rating')->nullable();
      $table->text('feedback');
      $table->decimal('earning')->nullable();
      $table->decimal('bonus')->default(0);
      $table->dateTime('departure_time')->nullable();
      $table->dateTime('arrival_time')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('runner_deliveries');
  }
};
