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
    Schema::create('product_sales', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('product_id');
      $table->dateTime('date_time_from');
      $table->dateTime('date_time_to');
      $table->decimal('peso_sale')->nullable();
      $table->integer('percentage_sale')->nullable();
      $table->tinyInteger('sale_status');
      $table->unsignedBigInteger('vendor_id');
      $table->tinyInteger('primary_item')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('product_sales');
  }
};
