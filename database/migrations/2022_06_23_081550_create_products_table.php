<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->nullable(false);
            $table->mediumText('description')->nullable();
            $table->unsignedInteger('price');;
            $table->integer('discount')->nullable();
            $table->unsignedInteger('weight')->nullable(false);
            $table->string('url_image')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->tinyInteger('available')->nullable(false);
            $table->unsignedInteger('categories_id');
            
            $table->foreign('categories_id', 'fk_products_categories1')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
        });

        Schema::disableForeignKeyConstraints();
        Schema::create('order_product', function (Blueprint $table) {
            $table->unsignedInteger('quantity')->nullable();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('order_id');

            $table->primary(['product_id', 'order_id']);
            $table->foreign('order_id', 'fk_order_product_orders1')->references('id')->on('orders');
            $table->foreign('product_id', 'fk_order_product_products1')->references('id')->on('products');
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
}
