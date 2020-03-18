<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblElectronicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_electronics', function (Blueprint $table) {
$table->bigIncrements('eproduct_id');
            $table->string('eproduct_name');
            $table->string('ecategory_id');
            $table->text('eproduct_short_description');
            $table->text('eproduct_long_description');
            $table->Integer('eproduct_qty');
            $table->Integer('eproduct_price');
            $table->string('eproduct_img');
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
        Schema::dropIfExists('tbl_electronics');
    }
}
