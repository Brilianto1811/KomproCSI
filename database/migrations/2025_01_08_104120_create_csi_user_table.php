<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsiUserTable extends Migration
{
    public function up()
    {
        Schema::create('csi_user', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user')->autoIncrement()->primary();
            $table->string('username_user')->notNullable();
            $table->string('email_user')->notNullable();
            $table->string('password')->notNullable();
            $table->integer('id_role')->notNullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('csi_user');
    }
}
