<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_post');
            $table->foreign('job_post')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile_no');
            $table->string('minmum_education');
            $table->string('minimum_experience');
            $table->string('description');
            $table->string('logo');
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
        Schema::dropIfExists('companies');
    }
}
