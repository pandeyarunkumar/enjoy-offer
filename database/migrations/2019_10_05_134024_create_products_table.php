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
            $table->bigIncrements('id');
            $table->integer('store_id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('name');
            $table->string('slug'); 
            $table->string('short_description')->nullable();
            $table->text('description')->nullable();
            $table->double('cost_price',2)->default(0.00);
            $table->double('selling_price',2)->default(0.00);
            $table->double('compare_price',2)->default(0.00);
            $table->string('compare_text')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('featured_image')->nullable();
            $table->boolean('is_published')->default(false);
            $table->dateTime('published_at')->nullable();
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
