<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['legal','translation','services','jasem','shaaban'])->default('legal');
            $table->string('client_name')->nullable();
            $table->string('client_image')->nullable();
            $table->string('client_job')->nullable();
            $table->string('image')->nullable();
            $table->string('review')->nullable();
            $table->enum('rate', ['1', '2','3','4','5'])->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
