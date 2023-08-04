<?php

use App\Enum\ListingTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('stock_code', 10)->index()->comment('公司代號');
            $table->string('name', 10)->index()->comment('公司名稱');
            $table->date('listing_date')->comment('上市時間');
            $table->date('delisting_date')->nullable()->comment('下市時間');
            $table->enum('type', ListingTypeEnum::cases())->nullable()->comment('上市T/上櫃O');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
