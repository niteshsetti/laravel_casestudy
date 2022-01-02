<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createpostmig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userposts',function(Blueprint $post){
            $post->integer('Id');
            $post->string('Category');
            $post->string('Title');
            $post->longText('Description');
            $post->string('Image');
            $post->string('Status');
            $post->string('Postid');
            $post->string('created_by');
            $post->timestamps();
            $post->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userposts');
    }
}
