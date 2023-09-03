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
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->enum('user_type', [0, 1, 2, 3, 4, 5, 6, 7])
        ->default(7)
        ->comment('0-super_user|1-admin|2-operator-manager|3-cashier|4-checker|5-getter|6-runner|7-customer');
      $table->string('first_name');
      $table->string('middle_name')->nullable();
      $table->string('last_name');
      $table->string('phone_number')->unique();
      $table->string('email')->unique();
      $table->string('password');
      $table->text('avatar')->nullable();
      $table->unsignedBigInteger('address_id')->nullable();
      $table->date('birthday')->nullable();
      $table->enum('gender', ['f', 'm'])->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->boolean('upload_successful')->default(false);
      $table->string('disk')->default('public');
      $table->dateTime('last_login_at')->nullable();
      $table->string('ip_address')->nullable();
      $table->string('browser_agent')->nullable();
      $table->string('verification_code')->nullable()->comment('For verification code when someone login new browser');
      $table->string('verification_time_limit')->nullable()->comment('Time limit for user verification');
      $table->unsignedTinyInteger('status')->default(1)->comment('1-active|2-inactive');
      $table->unsignedTinyInteger('identifier_type')->default(1)->comment('1-customer|2-operator|3-guest');
      $table->softDeletes();
      $table->rememberToken();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('users');
  }
};
