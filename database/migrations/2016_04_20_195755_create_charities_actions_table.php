<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharitiesActionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charities_actions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->datetime('begin_datetime')->nullable();
            $table->string('local');
            $table->string('address');
            $table->string('description');
            $table->string('participants_quantity');

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
        Schema::drop('charities_actions');
    }

}
