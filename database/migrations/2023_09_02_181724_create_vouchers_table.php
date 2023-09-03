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
    Schema::create('vouchers', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('vendor_id')->nullable();
      $table->unsignedBigInteger('user_id');
      $table->string('code');
      $table->text('details');
      $table->date('valid_date');
      $table->decimal('peso_discount', 8, 2);
      $table->unsignedInteger('peso_percentage');
      $table->decimal('min_amount', 8, 2);
      $table->string('usability')->comment('how extend the voucher used');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('vouchers');
  }
};
