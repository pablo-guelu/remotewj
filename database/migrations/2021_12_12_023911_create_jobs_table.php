<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('title');
            $table->string('category');
            $table->string('isremote');
            $table->integer('days')->nullable();
            $table->text('description');
            $table->text('url');
            $table->string('region')->nullable();
            $table->string('type')->nullable();
            $table->string('timezone')->nullable();
            $table->foreignId('company_id')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}