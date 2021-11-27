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
            $table->integer('category_id')->comment('カテゴリーID');
            $table->string('product_name',50)->comment('商品名');
            $table->text('overview')->comment('商品概要');
            $table->string('price_s',30)->comment('Shortサイズの料金');
            $table->string('price_t',30)->comment('Tallサイズの料金');
            $table->string('price_g',30)->comment('Grandeサイズの料金');
            $table->string('price_v',30)->comment('Ventiサイズの料金');

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
}
