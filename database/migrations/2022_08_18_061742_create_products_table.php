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
            $table->longText('name');
            $table->longText('slug');
            $table->longText('description');
            $table->longText('image');
            $table->string('vendor');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('status');
            $table->integer('price');
            $table->string('sku');
            $table->string('brand_name');
            $table->integer('quantity');
            $table->boolean('featured')->default(false);
            $table->boolean('active')->default(true);
            $table->string('condition')->default('new');
            $table->string('type')->default('auction');
            $table->string('category');
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
