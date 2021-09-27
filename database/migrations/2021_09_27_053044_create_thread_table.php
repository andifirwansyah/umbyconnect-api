<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->integer('topic_id')->index();
            $table->integer('title');
            $table->integer('body')->nullable();
            $table->integer('link')->nullable();
            $table->integer('image')->nullable();
            $table->integer('tag')->nullable();
            $table->integer('slug')->nullable();
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
        Schema::dropIfExists('thread');
    }
}
