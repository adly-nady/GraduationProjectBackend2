<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('FullName',200)->nullable();
            $table->string('image',300)->nullable();
            $table->string('email',300)->nullable();
            $table->string('phone',300)->nullable();
            $table->string('password',500)->nullable();
            $table->string('access_token',600)->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->on('department')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('qualifications_id')->nullable();
            $table->foreign('qualifications_id')->on('qualifications')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->foreign('job_title_id')->on('job_title')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
