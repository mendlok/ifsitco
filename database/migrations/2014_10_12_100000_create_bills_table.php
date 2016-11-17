<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_received');
            $table->integer('number_pieces');
            $table->float('declared_value');
            $table->float('weigth');
            $table->float('heigth');
            $table->float('long');
            $table->float('width');
            $table->string('description',80);
            $table->float('insurance');
            $table->float('freights');
            $table->float('tax');
            $table->float('discount');
            $table->float('total');
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
        Schema::drop('bills');
    }
}
