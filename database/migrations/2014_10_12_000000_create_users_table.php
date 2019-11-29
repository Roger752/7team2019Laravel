<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // id, email, password, name, admin
        Schema::create('users', function (Blueprint $table) {
            //$table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->string('name', 10);
            $table->string('email', 255)->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->boolean('admin')->default(false)->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
