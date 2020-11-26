<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdssencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adssences', function (Blueprint $table) {


            $table->string("name")->comment('名前');
            $table->text("url")->nullable()->comment('URL');
            $table->string("icon")->default('img/default/p_img')->comment('画像のパス');
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
        Schema::dropIfExists('adssences');
    }
}
