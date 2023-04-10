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
        Schema::create('customer_adresses', function (Blueprint $table) {
            $table->id();
            $table->string('type',45);
            $table->string('adress1');
            $table->string('adress2');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('zip_code');
            $table->string('country_code');
            $table->foreignId('costumer_id')->references('id')->on('customers');
            $table->timestamps();
            $table->foreign('country_code')->references('code')->on('countries');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_adresses');
    }
};
