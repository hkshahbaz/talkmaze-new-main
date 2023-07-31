<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorEarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_earnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("stripe_transfer_id")->nullable();
            $table->unsignedbigInteger("tutor_id");
            $table->string("amount");
            $table->string("hours")->nullable();
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
        Schema::dropIfExists('tutor_earnings');
    }
}
