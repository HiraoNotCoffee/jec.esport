<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {

            $table->string("name")->nullable()->comment('お問い合わせ者名');
            $table->string("mail")->nullable()->comment('メールアドレス');
            $table->text("body")->comment('問い合わせ内容');
            $table->integer("flg")->nullable()->default(0)->comment('既読フラグ');
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
        Schema::dropIfExists('contacts');
    }
}
