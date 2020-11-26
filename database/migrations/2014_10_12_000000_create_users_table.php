<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string("name")->default('player')->comment('ユーザー名');
            $table->text("detail")->nullable()->comment('プロフィール');
            $table->string("icon")->default('img/default/icon.jpg')->comment('画像のパス');
            $table->string("header")->nullable()->default('img/default/header.jpg')->comment('ヘッダー画像');
            $table->integer("staff_flg")->comment('０.管理者　1.一般会員　');
            $table->integer("play_environment")->nullable()->comment('活動環境');
            $table->integer("title_id")->nullable()->comment('ゲームタイトルID');
            $table->integer("team_id")->nullable()->comment('チームID');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
