<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PageContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagecontents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');

            $table->text('theme_title')->nullable();
            $table->text('annonce_title')->nullable();
            $table->text('goldprice_title')->nullable();
            
            $table->text('silverprice_title')->nullable();

            $table->text('latestnews_title')->nullable();   
            $table->text('supportedcountries_title')->nullable();
            $table->text('rkmyfooter_title')->nullable();
            $table->text('privacytittle_title')->nullable();
            $table->text('privacy_title')->nullable();
            $table->text('termstittle_title')->nullable();
            $table->text('terms_title')->nullable();

            $table->text('notes')->nullable();
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
        Schema::dropIfExists('pagecontents');
    }
}
