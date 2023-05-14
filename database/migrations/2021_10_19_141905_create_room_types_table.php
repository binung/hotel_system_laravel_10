<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->string('room_name')->nullable();
            $table->timestamps();
        });

        DB::table('room_types')->insert([
            ['room_name' => 'Single'],
            ['room_name' => 'Double'],
            ['room_name' => 'Quad'],
            ['room_name' => 'King'],
            ['room_name' => 'Suite'],
            ['room_name' => 'Villa'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
}
