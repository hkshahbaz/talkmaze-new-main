<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("message")->nullable();
            $table->enum("interval", ['1', '2'])->comment("1. One Time 2. Recurring")->default('1');
            $table->integer("no_of_weeks")->nullable();
            $table->integer("remaining_weeks")->nullable();
            $table->string("date");
            $table->string("active_date")->nullable();
            $table->string("slot")->nullable();
            $table->integer("time_in_min")->default(0);
            $table->unsignedBigInteger('student_id')->nullable(); // foreigh key
            $table->unsignedBigInteger('tutor_id')->nullable();
            $table->string("start_time", 191)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string("end_time", 191)->collation('utf8mb4_unicode_ci')->nullable();
            $table->string("hours", 191)->collation('utf8mb4_unicode_ci')->nullable();
            $table->unsignedBigInteger('parent_student_id')->nullable(); 
            $table->enum("status", ["pending", "cancelled", "approved", "active"])->default("pending");
            $table->enum("class_status", ["pending", "completed", "cancelled"])->collation('utf8mb4_unicode_ci')->default("pending");
            $table->boolean("payment_status")->default(0);
            $table->double("amount")->default(0.00);
            $table->double("amount_paid")->default(0);
            $table->double("amount_reserved")->default(0);
            $table->boolean("is_subscribed_payment")->default(0);
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
        Schema::dropIfExists('coach_requests');
    }
}
