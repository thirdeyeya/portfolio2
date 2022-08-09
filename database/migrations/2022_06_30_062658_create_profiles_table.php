<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('gender');//プロフィールの性別を保存するカラム
            $table->string('hobby');//プロフィールの趣味を保存するカラム
            $table->string('introduction');//プロフィールの自己紹介を保存するカラム	    
            $table->timestamps();
            
            //userが削除された際に、userに紐づくprofileも一緒に削除する
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}

