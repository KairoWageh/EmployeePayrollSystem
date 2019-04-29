<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->string('email');
			$table->integer('role_id')->unsigned();
			$table->boolean('full_time')->default(1);
			$table->string('street')->nullable();
			$table->string('town')->nullable();
			$table->string('city')->nullable();
			$table->string('country')->nullable();
			$table->foreign('role_id')->references('roles')->on('id');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
