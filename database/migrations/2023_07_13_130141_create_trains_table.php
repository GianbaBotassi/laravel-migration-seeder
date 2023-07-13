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
            $table->string('company', 32);
            $table->integer('carriages');
            $table->string('departure_station', 32);
            $table->string('arrive_station', 32);
            $table->timestamp('depart_time');
            $table->boolean('in_time');
            $table->boolean('is_canceled')->default(false);

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
