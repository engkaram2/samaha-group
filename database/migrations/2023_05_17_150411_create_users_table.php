<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('image')->nullable();
            $table->string('passport_image')->nullable();
            $table->string('mobile')->nullable();
            $table->string('password')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('nationality_id')->nullable()->constrained('nationalities')->cascadeOnDelete();

//            $table->enum('is_active', ['de_active','active'])->default('de_active');
//            $table->string('activation_code')->nullable();
            $table->boolean('is_want_delete_account')->default(0);

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
        Schema::dropIfExists('users');
    }
}
