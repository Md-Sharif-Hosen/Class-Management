<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->nullable();
            $table->integer('number')->nullable();
            $table->string('phase',100)->nullable();
            $table->string('task',100)->nullable();
            $table->string('sub_task',100)->nullable();
            $table->string('description',100)->nullable();
            $table->bigInteger('per_day_hours')->nullable();
            $table->bigInteger('total_days')->nullable();
            $table->bigInteger('total_hours')->nullable();
            $table->bigInteger('per_hours_cost')->nullable();
            $table->bigInteger('total')->nullable();


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
        Schema::dropIfExists('project_tasks');
    }
}
