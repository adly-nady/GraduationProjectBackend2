<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('images',500)->nullable();
            $table->string('Description')->nullable();
            $table->unsignedBigInteger('unit_id')->nullable();
            $table->foreign('unit_id')->on('units')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->on('department')->references('id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->double('balance')->nullable();
            $table->double('minimum')->nullable();
            $table->enum('type',['Spare Parts','Burlap'])->nullable();
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
        Schema::dropIfExists('items');
    }
}
