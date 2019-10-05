<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('incoming')->default(false);
            $table->string('first_name', 32);
            $table->string('last_name', 32);
            $table->string('email', 64)->index();
            $table->string('company', 64)->nullable()->default(false);
            $table->string('phone', 10)->nullable()->default(false);
            $table->unsignedInteger('message_subject_id')->index();
            $table->string('preview', 32)->nullable()->default(false)->comment('code will strip a blurb out and store it here');
            $table->longText('comment');
            $table->unsignedInteger('message_id')->nullable()->default(false)->comment('if replying to existing message, this will be the id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
