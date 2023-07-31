<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->text('phone')->nullable();
            $table->longText('address')->nullable();
            $table->string('city', 191)->nullable();
            $table->string('country', 191)->nullable();
            $table->string('country_code', 191)->nullable();
            $table->string('image', 191)->nullable();
            $table->tinyInteger('taking_request')->default(1);
            $table->timestamps();
            $table->tinyInteger("is_boarded")->default(0);
            $table->string('stripe_account', 250)->nullable();
            $table->string('zoom_access_token', 250)->nullable();
            $table->string('hourly_rate', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
