<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->default()->comment('チームの名前');
            $table->text('detail')->nullable()->default()->comment('チームの説明文');
            $table->text('icon')->nullable()->delault('img/team.jpg')-comment('チームアイコン');
            $table->integer('week_id')->nullable()->default()->comment('活動日ID');
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
        Schema::dropIfExists('teams');
    }
}
