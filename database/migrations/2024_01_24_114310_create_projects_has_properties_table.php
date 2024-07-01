<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsHasPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_has_properties', function (Blueprint $table) {
            $table->increments('project_has_property_id');
            $table->integer('project_id');
            $table->integer('project_property_id');
            $table->string('title',500)->nullable();
            $table->integer('input_type_id');
            $table->string('value',500)->nullable();
            $table->string('value_text',500)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_has_properties');
    }
}
