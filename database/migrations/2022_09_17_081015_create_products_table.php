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
            $table->id();
            $table->String('product_name');
            $table->String('qty');
            $table->MEDIUMTEXT('product_short_des');
            $table->LONGTEXT('product_long_des');
            $table->String('original_price');
            $table->String('selling_price');
            $table->String('product_category_name');
            $table->String('product_subcategory_name');
            $table->integer('product_category_id');
            $table->integer('product_subcategory_id');
            $table->String('product_img');
            $table->string('slug');
            $table->tinyInteger('status');
            $table->tinyInteger('trending');
            $table->String('tax');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
