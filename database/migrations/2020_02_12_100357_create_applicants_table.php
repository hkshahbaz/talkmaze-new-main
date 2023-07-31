<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email',250)->unique();
            $table->bigInteger('phone');
            $table->longText('education');
            $table->string('gender');
            $table->longText('debate');
            $table->longText('experience');
            $table->longText('education_level');
            $table->longText('why_to_join');
            $table->longText('resume');
            $table->longText('availabality');
            $table->string('educational_level');
            $table->longText('how_here_about_us');
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
        Schema::dropIfExists('applicants');
    }
}
