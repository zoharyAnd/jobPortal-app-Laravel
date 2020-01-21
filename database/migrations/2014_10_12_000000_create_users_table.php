<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            
            $table->string('c_companyName')->nullable();
            $table->string('c_contactPersonFullName')->nullable();
            
            $table->string('j_title')->nullable();
            $table->string('j_lastName')->nullable();
            $table->string('j_firstName')->nullable();
            $table->string('j_contactNumber')->nullable();
            $table->date('j_dateOfBirth')->nullable();
            $table->string('j_highestQualificationAchieved')->nullable();
            $table->string('j_cvUploadedStatus')->nullable();
            $table->string('j_skills')->nullable();

            $table->string('postalAddress')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('type');
            
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
