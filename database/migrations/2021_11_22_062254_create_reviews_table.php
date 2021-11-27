<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id')->comment('商品ID');
            $table->integer('swt_btr_star')->default(0)->comment('甘さ苦さの星評価');
            $table->integer('drink_star')->default(0)->comment('飲みやすさの星評価');
            $table->text('comment',30)->nullable()->change()->comment('レビューコメント');

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
        Schema::dropIfExists('reviews');
    }
}
