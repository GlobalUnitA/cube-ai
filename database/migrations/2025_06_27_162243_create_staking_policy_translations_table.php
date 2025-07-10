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
        Schema::create('staking_policy_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('policy_id')->constrained('staking_policies')->comment('정책 번호');
            $table->string('locale', 5)->comment('상품 이름');
            $table->string('name', 255)->comment('메모');
            $table->text('memo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staking_policy_translations');
    }
};
