<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSwmsTable extends Migration
{
    public function up()
    {
        Schema::create('swms', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('job_description');
            $table->string('steps_required');
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('swms');
    }
}
