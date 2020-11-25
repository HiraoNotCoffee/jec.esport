<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sns', function (Blueprint $table) {

          $table->integer("user_id")->nullable()->comment('ユーザーID');
          $table->text("sns_id")->nullable()->comment('SNSID');
          $table->text("url")->comment('URL');
          $table->bigIncrements('id');
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
        Schema::dropIfExists('user_sns');
    }
}
