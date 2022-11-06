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
            $table->bigIncrements('u_id',10);
            $table->string('u_name', 100);
            $table->date('u_dob');
            $table->string('u_age', 3);
            $table->string('u_phone', 11);
            $table->text('u_address1', 100);
            $table->text('u_address2', 100)->nullable();
            $table->string('u_email', 100);
            $table->string('u_profile_pic', 200)->nullable();
            $table->string('u_password', 100);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
