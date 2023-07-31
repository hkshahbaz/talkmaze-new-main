<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('meeting_sessions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("session_id");
            $table->bigInteger("zoom_id");
            $table->text("start_url");
            $table->text("join_url");
            $table->unsignedBigInteger('tutor_id');
            $table->unsignedBigInteger('student_id');
            $table->integer("time_taken")->nullable();
            $table->timestamp("ended_at")->nullable();
            $table->enum('status', ['0', '1', '2'])->default(0)->comment('0. No state 1. Started 2. Ended');
            $table->enum("refund_status", ['0', '1', '2', '3'])->comment("0 For Not Requested, 1 For Requested, 2 For Accepted, 3 For Declined")->default(0);
            $table->boolean('student_joined')->default(0);
            $table->unsignedBigInteger('coach_request_id');
            $table->enum('refund_request', ['1', '2', '3'])->default(1)->comment('0. Default 1. Requested 2. Pending');
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
        Schema::dropIfExists('meeting_sessions');
    }
}
