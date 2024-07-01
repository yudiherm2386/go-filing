<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxs', function (Blueprint $table) {
            $table->increments('box_id');
            $table->integer('function_id');
            $table->integer('parent_id');
            $table->string('name',500)->nullable();
            $table->string('description',500)->nullable();
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
        Schema::dropIfExists('boxs');
    }
}
