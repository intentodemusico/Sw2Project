<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('ProductID');
            $table->text('ProductName');
            $table->integer('SupplierID')->unsigned();
            $table->integer('CategoryID')->unsigned();
            $table->string('QuantityPerUnity');
            $table->float('UnitPrice');
            $table->integer('UnitsInStock');
            $table->integer('UnitsOnOrder');
            $table->integer('ReorderLevel');
            $table->boolean('Discontinued');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('SupplierID')->references('SupplierID')->on('suppliers');
            $table->foreign('CategoryID')->references('CategoryID')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
