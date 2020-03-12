<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFigureAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figure_abilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('figure_id')->comment('人物id');
            $table->unsignedTinyInteger('ability')->comment('能力 1:health(生命值) 2:power(力量) 3:defense(守备)');
            $table->integer('value')->default(0)->comment('能力值');
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
        Schema::dropIfExists('figure_abilities');
    }
}
