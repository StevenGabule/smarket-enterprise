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
    Schema::create('product_stock_ins', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('product_id');
      $table->integer('qty');
      $table->decimal('supplier_date');
      $table->decimal('supplier_price');
      $table->decimal('retail_price');
      $table->unsignedBigInteger('process_by');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('product_stock_ins');
  }
};
