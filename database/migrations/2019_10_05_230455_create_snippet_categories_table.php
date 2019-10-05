<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnippetCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snippet_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 64);
            $table->string('slug', 64)->unique();
            $table->string('url', 255)->nullable()->default(FALSE);
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
        Schema::dropIfExists('snippet_categories');
    }
}
