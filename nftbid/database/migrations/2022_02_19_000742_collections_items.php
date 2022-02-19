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
        Schema::create('collections_items', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_collections')->unsigned();
            $table->Integer('created_by')->unsigned();
            $table->Integer('id_nft')->unsigned();
            $table->foreign('id_collections')->references('id')->on('collections');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('id_nft')->references('id')->on('nfts');
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
        Schema::dropIfExists('collections_items');
    }
};
