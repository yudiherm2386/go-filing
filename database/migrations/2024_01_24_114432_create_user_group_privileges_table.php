<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGroupPrivilegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_group_privileges', function (Blueprint $table) {
            $table->increments('user_group_privilege_id');
            $table->integer('user_group_id');
            $table->integer('menu_id');
            $table->integer('sort');
            $table->smallInteger('has_access')->default(0);
            $table->smallInteger('has_add')->default(0);
            $table->smallInteger('has_edit')->default(0);
            $table->smallInteger('has_delete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_group_privileges');
    }
}
