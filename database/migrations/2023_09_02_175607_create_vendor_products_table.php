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
    Schema::create('vendor_products', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('vendor_id');
      $table->unsignedBigInteger('product_id');
      $table->unsignedBigInteger('qty')->default(0);
      $table->unsignedBigInteger('re_order_qty')->default(0);
      $table->decimal('supplier_price', 8, 2)->default(0);
      $table->decimal('retail_price', 8, 2)->default(0);
      $table->boolean('item_status')->default(true);
      $table->boolean('instruction_status')->default(false);
      $table->unsignedBigInteger('added_by');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('vendor_products');
  }
};
