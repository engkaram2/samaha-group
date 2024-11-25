<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['legal','translation','services','jasem','shaaban'])->default('legal');
            $table->enum('appointment_type', ['office','online'])->default('office');
            $table->enum('status', ['pending','approved','denied','done'])->default('pending');
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('client_name');
            $table->string('client_mobile');
            $table->string('email_address');
            $table->dateTime('date');
            $table->string('problem');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
