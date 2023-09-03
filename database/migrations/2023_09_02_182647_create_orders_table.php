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
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('customer_id');
      $table->unsignedBigInteger('vendor_id');
      $table->dateTime('order_date');
      $table->dateTime('delivery_date_time');
      $table->string('total_time_processing')->nullable();
      $table->decimal('delivery_fee', 8,2)->nullable();
      $table->unsignedBigInteger('voucher_id')->nullable();
      $table->string('eta')->nullable();
      $table->unsignedBigInteger('order_status')
        ->default(0)
        ->comment('when the order comes in, it would go to the queuing and wait for the processing crew');
      $table->unsignedBigInteger('customer_order_payment_id');
      $table->unsignedBigInteger('location_id');
      $table->text('note')->nullable();
      $table->boolean('fast_lane')->default(false);
      $table->unsignedBigInteger('getter_id')->nullable();
      $table->unsignedBigInteger('checker_id')->nullable();
      $table->unsignedBigInteger('cashier_id')->nullable();
      $table->unsignedBigInteger('runner_id')->nullable();
      $table->unsignedTinyInteger('is_cancel')->default(false);
      $table->text('cancel_note')->nullable();
      $table->dateTime('payment_date')->nullable();
      $table->unsignedTinyInteger('size')->default(1)->comment('1-light|2-heavy');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('orders');
  }
};
