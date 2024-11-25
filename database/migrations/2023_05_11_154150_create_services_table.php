<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->nullable();
            $table->string('name_en')->nullable();
            $table->text('quote_ar')->nullable();
            $table->text('quote_en')->nullable();
//            $table->longText('description_ar')->nullable();
//            $table->longText('description_en')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('is_book_icon')->default(0);

            $table->longText('title1_ar')->nullable();
            $table->longText('title1_en')->nullable();
            $table->longText('description1_ar')->nullable();
            $table->longText('description1_en')->nullable();
            $table->string('image1')->nullable();

            $table->longText('title2_ar')->nullable();
            $table->longText('title2_en')->nullable();
            $table->longText('description2_ar')->nullable();
            $table->longText('description2_en')->nullable();
            $table->string('image2')->nullable();

            $table->enum('type', ['legal','translation','services','jasem','shaaban'])->default('legal');
            $table->boolean('status')->default(1);
            $table->string('slug_ar')->nullable();
            $table->string('slug_en')->nullable();
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
        Schema::dropIfExists('services');
    }
}
