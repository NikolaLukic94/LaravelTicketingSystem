<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('importance');
            $table->string('description');

            $table->timestamps();

            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('ticket_categories');

            $table->unsignedInteger('sub_category_id');
            $table->foreign('sub_category_id')->references('id')->on('ticket_sub_categories'); 

            $table->unsignedInteger('ticket_image_id');
            $table->foreign('ticket_image_id')->references('id')->on('ticket_images');

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
