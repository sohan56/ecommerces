<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mens_product', function (Blueprint $table) {
            $table->bigIncrements('mproduct_id');
            $table->string('mproduct_name');
            $table->string('category_id');
            $table->text('mproduct_short_description');
            $table->text('mproduct_long_description');
            $table->Integer('mproduct_qty');
            $table->Integer('mproduct_price');
            $table->string('mproduct_img');
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
        Schema::dropIfExists('mens_product');
    }
}
