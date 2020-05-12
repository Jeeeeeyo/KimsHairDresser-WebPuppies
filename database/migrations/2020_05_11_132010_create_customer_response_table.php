<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerResponseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_response', function (Blueprint $table) {
            $table->increments('id')->unsigned();                         
            
            
            $table->integer('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('forms_created'); 
            $table->string('name');                       
            $table->longText('description');  
            $table->dateTime('timeslot');    
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
        Schema::dropIfExists('customer_response');
    }
}
