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
    Schema::create('product_adjustments', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('product_id');
      $table->integer('adjust_type');
      $table->dateTime('adjust_date');
      $table->integer('qty');
      $table->tinyInteger('item_condition')
        ->default(1)->comment('0-unable|1-enable');
      $table->string('remarks', 255);
      $table->unsignedBigInteger('process_by');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('product_adjustments');
  }
};
