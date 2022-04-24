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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('total', $precision = 8, $scale = 2);            
            $table->timestamps();
            $table->foreign('product_name')->references('name')->on('products');
            $table->foreign('product_price')->references('price')->on('products');            
            $table->foreign('product_quantity')->references('quantity')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function(Blueprint $table) {
            $table->dropForeign(['quantity_product', 'price_product', 'name_product']);
        });

        Schema::dropIfExists('carts');
    }
};
