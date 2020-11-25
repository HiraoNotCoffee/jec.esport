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
            $table->string('name')->default('player')->comment('ユーザーの名');
            $table->text('detail')->nullable()->default()->comment('プロフィール');
            $table->text('icon')->default('img/default/icon.jpg')->comment('画像のパス');
            $table->text('header')->unique()->default('img/default/header.jpg')->comment('画像パス');
            $table->integer('staff_flg')->default()->comment('0.管理者 1.一般会員');
            $table->integer('play_environment')->nullable()->default()->comment('活動環境');
            $table->integer('title_id')->nullable()->default()->comment('ゲームタイトルID');
            $table->integer('team_id')->nullable()->default()->comment('チームID');
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
