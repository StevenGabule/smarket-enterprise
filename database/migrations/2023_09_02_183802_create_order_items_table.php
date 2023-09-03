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
    Schema::create('order_items', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('vendor_id');
      $table->unsignedBigInteger('order_id');
      $table->unsignedBigInteger('product_id');
      $table->decimal('price');
      $table->decimal('discount');
      $table->unsignedInteger('qty')->default(1);
      $table->decimal('supplier_price');
      $table->boolean('item_status')->default(true);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('order_items');
  }
};
