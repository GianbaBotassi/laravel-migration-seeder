<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('code', 10)->unique();
            // $table->string('company', 32);
            // $table->integer('carriages');
            // $table->string('departure_station', 32);
            // $table->string('arrival_station', 32);
            // $table->timestamp('departure_time');
            // $table->timestamp('arrival_time')->default('2023-07-13 15:30:00');
            // $table->boolean('in_time');
            // $table->boolean('is_canceled')->default(false);

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
        Schema::dropIfExists('trains');
    }
};
