<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->increments('subcat_id')->unsigned();
            $table->string('subcat_title');            
            $table->string('is_active')->default(1);
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('cat_id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('label_id')->unsigned();
            $table->foreign('label_id')->references('label_id')->on('label')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('subcategories');
    }
}
