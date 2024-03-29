<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('package_id')->nullable();
            $table->string('name');
            $table->string('postal_code');
            $table->integer('logo')->nullable();
            $table->integer('cover_image')->nullable();
            $table->text('address')->nullable();
            $table->string('business_email')->nullable();
            $table->double('lat', 9, 6)->nullable();
            $table->double('long', 9, 6)->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('stores');
    }
}
