<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetitionUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competition_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('competition_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('ptname')->nullable();
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('city');
            $table->string('country');
            $table->string('timezone');
            $table->softDeletes();
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
        Schema::dropIfExists('competition_users');
    }
}
