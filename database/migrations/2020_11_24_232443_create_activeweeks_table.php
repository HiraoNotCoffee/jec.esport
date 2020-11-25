<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveweeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activeweeks', function (Blueprint $table) {

            $table->integer("week")->comment('曜日[0,日, 1,月 ~ 6, 土]');
            $table->text("detail")->nullable()->comment('内容');
            $table->string("user_id")->comment('ユーザーID');
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
        Schema::dropIfExists('activeweeks');
    }
}
