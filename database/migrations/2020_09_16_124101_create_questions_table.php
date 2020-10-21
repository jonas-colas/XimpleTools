<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->longtext('description')->nullable();
            $table->unsignedBigInteger('dimension_id');
            $table->foreign('dimension_id')->references('id')->on('dimensions');
            $table->unsignedBigInteger('aspect_id')->nullable();
            $table->foreign('aspect_id')->references('id')->on('aspects');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
