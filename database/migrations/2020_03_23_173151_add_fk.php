<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id', 'category_products')->references('id')->on('categories');
        });

        Schema::table('product_user', function (Blueprint $table) {

            $table->bigInteger('product_id')
                ->unsigned()
                ->index();

            $table->foreign('product_id', 'prod_us')
                ->references('id')
                ->on('products');

            $table->bigInteger('user_id')
                ->unsigned()
                ->index();

            $table->foreign('user_id', 'us_prod')
                ->references('id')
                ->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('category_products');
            $table->dropColumn('category_id');
        });

        Schema::table('product_user', function (Blueprint $table) {
            $table->dropForeign('prod_us');
            $table->dropColumn('product_id');

            $table->dropForeign('us_prod');
            $table->dropColumn('user_id');
        });
    }
}
