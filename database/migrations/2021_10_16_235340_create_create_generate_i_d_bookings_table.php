<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateGenerateIDBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER id_store BEFORE INSERT ON bookings FOR EACH ROW
            BEGIN
                INSERT INTO sequence_tbls VALUES (NULL);
                SET NEW.bkg_id = CONCAT("BKG-", LPAD(LAST_INSERT_ID(), 8, "0"));
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
        DB::unprepared('DROP TRIGGER "id_store"');
    }
}