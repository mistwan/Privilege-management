<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("content");
            $table->timestamps();
        });

        Schema::create('admin_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("admin_id");
            $table->integer("role_id");
            $table->timestamps();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("content");
            $table->timestamps();
        });

        Schema::create('role_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("role_id");
            $table->integer("permission_id");
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('admin_roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('role_permissions');
    }
}
