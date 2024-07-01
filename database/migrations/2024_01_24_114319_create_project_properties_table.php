<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_properties', function (Blueprint $table) {
            $table->increments('project_property_id');
            $table->integer('function_id');
            $table->string('title',255)->nullable();
            $table->string('description',500)->nullable();
            $table->string('data',4000)->nullable();
            $table->integer('input_type_id');
            $table->integer('sort');
            $table->integer('source_id')->nullable();
            $table->smallInteger('is_label')->default(0);
            $table->smallInteger('is_unique')->default(0);
            $table->smallInteger('is_mandatory')->default(0);
            $table->smallInteger('is_table_list')->default(0);
            $table->smallInteger('is_filter')->default(0);
            $table->smallInteger('is_advanced_search')->default(0);
            $table->integer('created_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_properties');
    }
}
