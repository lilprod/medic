<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_institutions', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id')->nullable();
            $table->string('registration')->nullable();
            $table->string('matricule')->nullable();
            $table->string('name');
            $table->string('firstname')->nullable();
            $table->string('logo')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('slogan')->nullable();
            $table->mediumText('message')->nullable();
            $table->string('how_find_us')->nullable();
            $table->mediumText('biography')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->unique();
            $table->mediumText('address')->nullable();
            $table->date('creation_date')->nullable();
            $table->string('proof_file')->nullable();
            $table->time('open_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('director_name')->nullable();
            $table->integer('create_user_id')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_activated')->default(0);
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
        Schema::dropIfExists('health_institutions');
    }
}
