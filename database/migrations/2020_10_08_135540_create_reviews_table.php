<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('booking_list_id')->unsigned()->nullable();
            $table->foreign('booking_list_id')->references('id')->on('booking_lists');
            $table->integer('user_reporter_id')->unsigned()->nullable();
            $table->foreign('user_reporter_id')->references('id')->on('users');
            $table->integer('user_reported_id')->unsigned()->nullable();
            $table->foreign('user_reported_id')->references('id')->on('users');
            $table->string('object_type')->nullable();
            $table->string('review_type')->nullable();
            $table->string('comment')->nullable();
            $table->integer('flag_active')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->string('created_by')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('deleted_by')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
