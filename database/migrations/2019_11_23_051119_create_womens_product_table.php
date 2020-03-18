<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWomensProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('womens_product', function (Blueprint $table) {
            $table->bigIncrements('wproduct_id');
            $table->string('wproduct_name');
            $table->string('wcategory_id');
            $table->text('wproduct_short_description');
            $table->text('wproduct_long_description');
            $table->Integer('wproduct_qty');
            $table->Integer('wproduct_price');
            $table->string('wproduct_img');
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
        Schema::dropIfExists('womens_product');
    }
}
