<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->nullable()->constrained('teams')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->enum('type', ['legal','translation','services','jasem','shaaban'])->default('legal');

            $table->string('issue_number')->nullable();
            $table->string('issue_name')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
//            $table->string('file')->nullable();
//            $table->enum('status', ['on_progress','approved','ended'])->default('on_progress');

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
        Schema::dropIfExists('issues');
    }
}
