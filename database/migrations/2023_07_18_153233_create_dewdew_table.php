<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDewdewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dewdew', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('total')->nullable();
            $table->float('number')->nullable();
            $table->string('email')->nullable();
            $table->date('date')->nullable();
            $table->text('queue')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dewdew');
    }
}
