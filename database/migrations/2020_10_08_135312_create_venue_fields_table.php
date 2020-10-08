<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenueFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venue_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_venue_id')->unsigned()->nullable();
            $table->foreign('user_venue_id')->references('id')->on('user_venues');
            $table->string('field_name')->nullable();
            $table->string('field_type')->nullable();
            $table->string('price')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('venue_fields');
    }
}
