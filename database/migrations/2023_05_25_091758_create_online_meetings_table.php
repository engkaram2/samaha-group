<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_meetings', function (Blueprint $table) {
            $table->id();
//            $table->boolean('integration');
            $table->enum('type', ['legal','translation','services','jasem','shaaban'])->default('legal');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('created_by')->nullable();
            $table->string('meeting_id')->nullable();
            $table->string('topic')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->integer('duration')->comment('minutes')->nullable();
            $table->string('password')->comment('meeting password')->nullable();
            $table->text('start_url')->nullable();
            $table->text('join_url')->nullable();
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
        Schema::dropIfExists('online_meetings');
    }
}
