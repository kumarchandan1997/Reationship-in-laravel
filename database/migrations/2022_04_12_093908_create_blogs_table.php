<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('des')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('short_des')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_des')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('og_title')->nullable();
            $table->text('og_des')->nullable();
            $table->string('og_image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->date('date')->nullable();
            $table->tinyInteger('flag')->default(0);
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
        Schema::dropIfExists('blogs');
    }
}
