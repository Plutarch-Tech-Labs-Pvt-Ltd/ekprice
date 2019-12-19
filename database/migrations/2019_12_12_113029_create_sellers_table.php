<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('seller_id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('display_name');
            $table->string('profile');
            $table->string('education');
            $table->string('average_response_time');
            $table->string('seller_type');
            $table->integer('country_id')->unsigned();
            // $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->integer('state_id')->unsigned();
            // $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade'); 
            $table->integer('city_id')->unsigned();
            // $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade'); 
            $table->string('individual_describes_you')->nullable();
            $table->string('individual_about_yourself')->nullable();
            $table->string('individual_skill')->nullable();
            $table->string('language1')->nullable();
            $table->string('language2')->nullable();
            $table->string('language3')->nullable();
            $table->string('expertise_level_1')->nullable();
            $table->string('expertise_level_2')->nullable();
            $table->string('expertise_level_3')->nullable();
            $table->string('company_name')->nullable();
            $table->string('num_years_business')->nullable();
            $table->string('company_technologies')->nullable();
            $table->string('gstin')->nullable();
            $table->string('about_company_service')->nullable();
            $table->enum('is_approved', array('0', '1'))->default('0');
            $table->enum('status', array('0', '1'))->default('0');
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
        Schema::dropIfExists('sellers');
    }
}
