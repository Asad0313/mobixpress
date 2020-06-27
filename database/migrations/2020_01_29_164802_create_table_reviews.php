<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {

            $table->bigIncrements('ReviewID');
            $table->integer('users_id');
            $table->integer('pro_id');
            $table->string('pro_image')->nullable();
            $table->string('email');
            $table->string('FullName');
            $table->string('pro_name');
            $table->integer('productQuality');
            $table->integer('DeliveryService');
            $table->integer('otherServices');
            $table->integer('other');
            $table->char('Your Views');
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
        Schema::dropIfExists('reviews');
    }
}
