<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->mediumText('description')->nullable();
            $table->longText('body');
            $table->string('reference')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->float('day_pay', 8, 2)->nullable();
            $table->float('penalty', 8, 2)->nullable();
            $table->float('hour_guard', 8, 2)->nullable();
            $table->boolean('registered_with_council')->default(0);
            $table->boolean('accom_meal_travel')->default(0);
            $table->integer('structure_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('attach_file')->nullable();
            $table->mediumText('video_url')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->mediumText('meta_description')->nullable();
            $table->integer('user_id');
            $table->integer('status');
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
        Schema::dropIfExists('offers');
    }
}
