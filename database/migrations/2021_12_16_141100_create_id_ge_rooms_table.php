<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdGeRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER id_store_room BEFORE INSERT ON rooms FOR EACH ROW
            BEGIN
                INSERT INTO room_sequences VALUES (NULL);
                SET NEW.bkg_room_id = CONCAT("BKG-", LPAD(LAST_INSERT_ID(), 8, "0"));
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER "id_store_room"');
    }
}
