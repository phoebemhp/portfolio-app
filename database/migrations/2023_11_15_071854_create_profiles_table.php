<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('image')->nullable();
            $table->longText('autobiography')->nullable();
            $table->string('contact_no')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('dribble_url')->nullable();
            $table->text('behance_url')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
