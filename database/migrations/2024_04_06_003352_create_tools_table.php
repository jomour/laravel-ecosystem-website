<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolsTable extends Migration
{
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('imagePath');
            $table->text('description');
            $table->string('websitePath')->nullable();
            $table->string('githubPath')->nullable();
            $table->unsignedBigInteger('sub_categories_id');
            $table->foreign('sub_categories_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('tools', function (Blueprint $table) {
            $table->dropForeign(['sub_categories_id']);
        });
        Schema::dropIfExists('tools');
    }
}
