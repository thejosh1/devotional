<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('churches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('alternate_name')->nullable();
            $table->string('parent_id')->default(0);
            $table->integer('leader_id')->nullable();
            $table->integer('address_id')->nullable();
            $table->integer('profile_media_id')->nullable();
            $table->string('slogan')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('churches');
    }
}
