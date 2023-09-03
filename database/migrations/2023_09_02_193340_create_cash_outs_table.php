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
    Schema::create('cash_outs', function (Blueprint $table) {
      $table->id();
      $table->string('type')->comment('1-payout|2-expenses');
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('vendor_id');
      $table->decimal('request_amount');
      $table->dateTime('co_date_time');
      $table->string('remarks');
      $table->unsignedBigInteger('process_by');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('cash_outs');
  }
};
