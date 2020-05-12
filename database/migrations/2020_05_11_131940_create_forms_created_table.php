<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsCreatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms_created', function (Blueprint $table) {             
            $table->increments('id')->unsigned();        
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');  
            $table->longText('description');  
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
        Schema::dropIfExists('forms_created');
    }
}
