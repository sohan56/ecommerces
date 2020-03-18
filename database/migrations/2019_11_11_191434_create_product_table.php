<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
           $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->string('category_id');
            $table->string('manufacturer_id');
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->Integer('product_qty');
            $table->Integer('product_price');
            $table->string('product_img');
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('tbl_product');
    }
}
