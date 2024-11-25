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
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->text('quote_ar')->nullable();
            $table->text('quote_en')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->string('image')->nullable();
            $table->string('page_image')->nullable();
            $table->enum('type', ['legal','translation','services','jasem','shaaban'])->default('legal');
            $table->enum('blog_type', ['low_update','latest_update','publications'])->default('low_update');
            $table->boolean('status')->default(1);
            $table->string('slug_ar')->nullable();
            $table->string('slug_en')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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
