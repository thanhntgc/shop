<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogTable extends Migration
{
    /**
     * Run the catalog migrations.
     */
    public function up()
    {
        Schema::create('catalog', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the catalog migrations.
     */
    public function down()
    {
        Schema::drop('catalog');
    }
}
