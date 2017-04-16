<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandTable extends Migration
{
    /**
     * Run the brand migrations.
     */
    public function up()
    {
        Schema::create('brand', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
			$table->timestamp("created_at");
			$table->timestamp("updated_at");
        });
    }

    /**
     * Reverse the brand migrations.
     */
    public function down()
    {
        Schema::drop('brand');
    }
}
