<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->String('fname');
            $table->String('lname');
            $table->String('enrollyear');
            $table->integer('payment')->nullable();           
            $table->String('phone');
            $table->String('address');
            $table->String('birthdate');
            $table->String('birimage');
            $table->String('idimage');
            $table->String('pimage');
            $table->String('spec');
            $table->String('price');
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
        Schema::dropIfExists('students');
    }
}
