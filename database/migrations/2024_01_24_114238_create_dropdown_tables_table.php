<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDropdownTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dropdown_tables', function (Blueprint $table) {
            $table->increments('dropdown_table_id');
            $table->string('name',255);
            $table->string('table_name',255);
            $table->string('field_id',255);
            $table->string('field_name',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dropdown_tables');
    }
}
