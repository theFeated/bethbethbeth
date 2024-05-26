<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('name');
            $table->date('birthday');
            $table->string('phone');
            $table->string('address');
            $table->integer('age');
            $table->string('degree');
            $table->string('email');
            $table->string('dance_instructor');
            $table->text('additional_info');
            $table->text('about_me');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_details');
    }
}
