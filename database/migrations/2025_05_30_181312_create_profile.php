<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('gender')->nullable();
            $table->string('email');
            $table->string('university_name')->nullable();
            $table->string('majors')->nullable();
            $table->string('prodi')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->timestamps();

            // Relations
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
};
