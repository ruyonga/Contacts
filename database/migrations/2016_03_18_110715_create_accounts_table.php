<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number')->unique();;
            $table->string('fname');
            $table->string('lname');
            $table->string('phone')->unique();;
            $table->string('email')->unique();;
            $table->string('position');
            $table->integer('region_id')->unsigned()->index();;
            $table->boolean('isking')->default(0);
            $table->boolean('isqueen')->default(0);
            $table->boolean('isregionhead')->default(0);
            $table->text('jobdescription');
            $table->timestamps();

            //set the foreign key constrait
            $table->foreign('region_id')->references('id')->on('regions') ;



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}
