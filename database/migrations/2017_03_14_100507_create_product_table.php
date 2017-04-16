<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("catalog_id")->unsigned();
			$table->integer("brand_id")->unsigned();
			$table->string("name");
			$table->integer("price");
			$table->string("color");
			$table->integer("storage");
			$table->integer("instock");
			$table->integer("discount");
			$table->string("content");
			$table->string("thumbnail");
			$table->string("images");
			$table->boolean("enable");
			$table->timestamp("created_at");
			$table->timestamp("updated_at");


		});

        Schema::table('product', function (Blueprint $table){
			$table->foreign('catalog_id')->references('id')->on('catalog')->onDelete('cascade');
			$table->foreign('brand_id')->references('id')->on('brand')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }
}
