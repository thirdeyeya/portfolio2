<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('youtube');//youtubeを保存するカラム
            $table->string('title');//曲名を保存するカラム
            $table->string('artist_name');//アーティスト名を保存するカラム
            $table->string('anime_official_cite');//アニメ公式を保存するカラム
            $table->string('artist_official_cite');//アーティスト公式を保存するカラム
            $table->string('image_path')->nullable();//画像を保存するカラム
            $table->integer('genre_id');//genre_idを保存するカラム
            $table->integer('music_tone_id');//music_tone_idを保存するカラム
            $table->string('gender_id');//gender_idを保存するカラム
            $table->integer('anime_id');//anime_idを保存するカラム
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
        Schema::dropIfExists('music');
    }
}
