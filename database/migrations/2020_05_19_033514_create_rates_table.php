<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('USD_GET');
            $table->decimal('EUR_GET');
            $table->decimal('RUR_GET');
            $table->decimal('KGS_GET');
            $table->decimal('GBP_GET');
            $table->decimal('CNY_GET');
            $table->decimal('USD_PASS');
            $table->decimal('EUR_PASS');
            $table->decimal('RUR_PASS');
            $table->decimal('KGS_PASS');
            $table->decimal('GBP_PASS');
            $table->decimal('CNY_PASS');
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
        Schema::dropIfExists('rates');
    }
}
