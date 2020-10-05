<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("video_id")->unique();
            $table->string('video_type')->nullable();
            $table->string('title');
            $table->string('description')->nullable();
            $table->longText('image')->nullable();
            $table->integer("duration")->default(0);
            $table->integer("width")->default(0);
            $table->integer("height")->default(0);
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
        Schema::dropIfExists('videos');
    }
}
