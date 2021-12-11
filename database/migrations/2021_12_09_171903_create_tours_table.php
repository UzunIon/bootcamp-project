<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            
            $table->string('name', 50);
            $table->text('details');

            $table->foreignId('guest_house_id')
            ->nullable()
            ->constrained()
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            $table->foreignId('location_id')
            ->nullable()
            ->constrained()
            ->cascadeOnUpdate()
            ->restrictOnDelete();
            $table->foreignId('sport_activity_id')
            ->nullable()
            ->constrained()
            ->cascadeOnUpdate()
            ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
