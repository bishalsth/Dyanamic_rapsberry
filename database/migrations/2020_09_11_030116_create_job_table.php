<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('v_name');
            $table->string('description');
            $table->string('job_spec');
            $table->string('job_category');
            $table->string('total_req');
            $table->string('educational_qal');
            $table->string('experience');
            $table->string('type');
            $table->string('gender');
            $table->string('job_type');
            $table->string('salary');
            
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
