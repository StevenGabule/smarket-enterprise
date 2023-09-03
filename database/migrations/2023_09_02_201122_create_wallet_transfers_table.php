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
    Schema::create('wallet_transfers', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('vendor_id');
      $table->decimal('customer_id');
      $table->tinyInteger('transaction_type')->comment('cash, or any bank transfer service');
      $table->dateTime('transaction_date');
      $table->text('details')->nullable();
      $table->decimal('amount')->default(0);
      $table->unsignedBigInteger('process_by');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('wallet_transfers');
  }
};
