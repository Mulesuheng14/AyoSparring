<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('venue_field_id')->unsigned()->nullable();
            $table->foreign('venue_field_id')->references('id')->on('venue_fields');
            $table->integer('is_accepted')->default(0);
            $table->string('booking_type')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('hour')->nullable();
            $table->integer('duration')->nullable();
            $table->string('price')->nullable();
            $table->integer('sparring_user')->unsigned()->nullable();
            $table->foreign('sparring_user')->references('id')->on('users');
            $table->integer('is_available')->default(1);
            $table->integer('is_paid')->default(1);
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
        Schema::dropIfExists('booking_lists');
    }
}
