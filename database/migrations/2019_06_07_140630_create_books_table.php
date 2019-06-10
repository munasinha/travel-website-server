<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cus_name');
            $table->string('email');
            $table->string('country');
            $table->string('phone_num');
            $table->string('pickup_date');
            $table->string('pickup_from');
            $table->string('drop_date');
            $table->string('drop_to');
            $table->string('num_of_passengers');
            $table->string('num_of_baggagers');
            $table->string('vehicle');
            $table->string('comments');
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
        Schema::dropIfExists('books');
    }
}
