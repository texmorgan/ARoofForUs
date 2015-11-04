<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('firstName')->index();
            $table->string('lastName')->index();
            $table->date('birthday');
            $table->string('gender');
            $table->string('hair');
            $table->string('eyes');
            $table->boolean('active')->index();
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
        Schema::drop('seekers');
    }
}
