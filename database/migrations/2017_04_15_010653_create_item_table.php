<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('Products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productName')->unique();
            $table->integer('quantityInStock');
            $table->double('pricePerItem', 15, 2);;
            $table->double('totalValue', 15, 2);;
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
        Schema::drop('Products');
    }
}
