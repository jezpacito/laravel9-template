<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('product_number');
            $table->string('product_name');
            $table->string('description')->nullable();
            $table->integer('stocks_available')->default(0);
            $table->integer('remaining_stocks')->default(0);
            $table->boolean('status')->default(0);
            $table->integer('wholesale_price')->default(0);
            $table->integer('regular_price')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
