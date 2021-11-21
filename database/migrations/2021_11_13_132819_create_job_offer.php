<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_offer', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('job_type');
            $table->date('start_date');
            $table->integer('salary_min');
            $table->integer('salary_max');
            $table->text('work_place');
            $table->text('description');
            $table->text('experience');
            $table->text('benefits');
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
        Schema::dropIfExists('job_offer');
    }
}
