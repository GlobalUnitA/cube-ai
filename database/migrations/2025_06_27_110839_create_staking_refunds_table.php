<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('staking_refunds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->comment('회원 번호');
            $table->foreignId('staking_id')->constrained('stakings')->comment('스테이킹 번호');
            $table->foreignId('transfer_id')->constrained('asset_transfers')->comment('내역 번호');
            $table->decimal('amount', 20, 9)->default(0)->comment('금액');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staking_refunds');
    }
};
