<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoApiTable extends Migration
{
    public function up()
    {
        Schema::create('info_api', function (Blueprint $table) {
            $table->id();
            $table->string('HTTP_Method')->nullable();
            $table->string('Endpoint')->nullable();
            $table->string('Description')->nullable();
            $table->string('Parameters')->nullable();
            $table->string('Response_Example',5000)->nullable();
            $table->string('style')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('info_api');
    }
}
