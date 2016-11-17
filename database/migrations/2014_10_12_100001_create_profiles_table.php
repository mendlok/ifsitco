<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('client_type', ['client', 'admin'])->default('client');
            $table->string('name');
            $table->string('last_name');
            $table->string('DNI',15);
            $table->date('birth_date');
            $table->enum('sex', ['m', 'f']);
            $table->string('phone');
            $table->string('cellphone');
            $table->string('nacionality');
            $table->string('provinces');
            $table->string('canton');
            $table->string('district');
            $table->string('address');
            $table->enum('express', ['yes', 'no']);
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
        Schema::drop('profiles');
    }
}
