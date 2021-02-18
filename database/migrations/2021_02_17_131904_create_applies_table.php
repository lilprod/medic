<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('offer_id');
            $table->string('name');
            $table->string('firstname')->nullable();
            $table->string('email');
            $table->string('phone_number');
            $table->string('registration_file')->nullable();
            $table->mediumText('message')->nullable();
            $table->string('cv_file');
            $table->string('user_id')->nullable();
            $table->string('treat_by')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('applies');
    }
}
