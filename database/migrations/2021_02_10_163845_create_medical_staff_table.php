<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_staff', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->nullable();
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->mediumText('address')->nullable();
            $table->char('gender',1)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('nationality')->nullable();
            $table->string('profession')->nullable();
            $table->integer('speciality_id')->nullable();
            $table->mediumText('biography')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('file')->nullable();
            $table->string('exercice_place')->nullable();
            $table->string('title')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('how_find_us')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('qualified_by_council')->default(0);
            $table->boolean('registered_with_council')->default(0);
            $table->mediumText('message')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('create_user_id')->nullable();
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
        Schema::dropIfExists('medical_staff');
    }
}
