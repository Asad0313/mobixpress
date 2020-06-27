<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnInWishlist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_wishlist', function (Blueprint $table) {
            //
            $table->string('productname');
            $table->integer('productprice');
            $table->char('productimage');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('table_wishlist', function (Blueprint $table) {
            //
            $table->dropColumn('productname');
            $table->dropColumn('productprice');
            $table->dropColumn('productimage');

        });
    }
}
