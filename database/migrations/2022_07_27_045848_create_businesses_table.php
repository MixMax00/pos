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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id');
            $table->timestamp('start_date');
            $table->string('currency');
            $table->string('website');
            $table->integer('mobile');
            $table->integer('alternate_number')->nullable();
            $table->string('division');
            $table->string('district');
            $table->string('upzila');
            $table->integer('zip_code');
            $table->string('landarea');
            $table->string('surname');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('logo');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('businesses');
    }
};
