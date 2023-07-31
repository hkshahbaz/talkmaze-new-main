<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDurationColumnCourseContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_contents', function (Blueprint $table) {
            $table->string('duration')->after('content')->nullable();
            $table->string('size')->after('duration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_contents', function (Blueprint $table) {
            $table->dropColumn(['duration','size']);
        });
    }
}
