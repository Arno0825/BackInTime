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
        Schema::create('stock_prices', function (Blueprint $table) {
            $table->id();
            $table->string('stock_code', 10)->index()->comment('公司代號');
            $table->string('name', 10)->comment('公司名稱');
            $table->decimal('open_price', 7, 2)->comment('開盤價');
            $table->decimal('highest_price', 7, 2)->comment('最高價');
            $table->decimal('lowest_price', 7, 2)->comment('最低價');
            $table->decimal('close_price', 7, 2)->comment('收盤價');
            $table->double('volume')->comment('數量');
            $table->date('date')->index()->comment('日期');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_prices');
    }
};
