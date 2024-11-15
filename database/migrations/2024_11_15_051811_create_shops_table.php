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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('ShopName');
            $table->string('ShopContact1');
            $table->string('ShopContact2');
            $table->string('ShopAddressOne');
            $table->string('ShopAddressTwo');
            $table->string('ShopLogo');
            $table->string('ShopReceipt');
            $table->integer('ShopStat');
            $table->foreignId('company_id')->constrained('Companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
