<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('nick', 191)->nullable();
            $table->string('email',250)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable();
            $table->string('google_id', 191)->nullable();
            $table->rememberToken();
            $table->string('timezone', 191)->nullable();
            $table->text('bio')->nullable();
            $table->double('rating')->nullable();
            $table->integer('type')->nullable();
            $table->tinyInteger('subscriber')->nullable();
            $table->string('plan_coupon_status', 191)->default('false');
            $table->timestamps();
            $table->softDeletes();
            $table->string('dob', 191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
