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
            $table->string('importance')->default('medium');
            $table->string('description');
            $table->string('status')->default('new');
            $table->date('due')->nullable();

            $table->timestamps();

            $table->unsignedBigInteger('label_id')->nullable();
            $table->foreign('label_id')->references('id')->on('labels');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('ticket_categories');

            $table->unsignedBigInteger('sub_category_id');
            $table->foreign('sub_category_id')->references('id')->on('ticket_sub_categories'); 

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');   

            $table->unsignedBigInteger('assignee_id')->nullable();
            $table->foreign('assignee_id')->references('id')->on('users');   
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
