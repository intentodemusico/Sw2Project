<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSuppliersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('SupplierID');
            $table->string('CompanyName');
            $table->string('ContactName');
            $table->string('ContactTitle');
            $table->text('Adress');
            $table->string('City');
            $table->string('Region');
            $table->string('PostalCode');
            $table->string('Country');
            $table->string('Phone');
            $table->string('Fax');
            $table->mediumText('HomePage');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('suppliers');
    }
}
