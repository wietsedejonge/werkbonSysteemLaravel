<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWerkboninfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('werkboninfo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->datetime('startDate')->nullable();
            $table->string('finishDate')->nullable();
            $table->string('image');
            $table->string('material1')->nullable();
            $table->string('material2')->nullable();
            $table->string('material3')->nullable();
            $table->string('material4')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('werkboninfo');
    }
}
