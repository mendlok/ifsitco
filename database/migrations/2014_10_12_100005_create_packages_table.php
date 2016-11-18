<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('courrier');
            $table->string('tracking');
            $table->string('shop');
            $table->string('product_description');
            $table->float('value');
            $table->enum('status', ['pending', 'transit','delivered'])->default('pending');
            $table->integer('status_id')->unsigned()->nullable();
            $table->integer('guide_id')->unsigned()->nullable();
            $table->integer('profile_id')->unsigned()->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('guide_id')->references('id')->on('bills');
            $table->foreign('status_id')->references('id')->on('status');
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
        Schema::drop('packages');
    }
}
