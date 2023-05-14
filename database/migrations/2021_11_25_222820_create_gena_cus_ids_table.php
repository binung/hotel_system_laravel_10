<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenaCusIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER id_store_cus BEFORE INSERT ON customers FOR EACH ROW
            BEGIN
                INSERT INTO sequence_cuses VALUES (NULL);
                SET NEW.bkg_customer_id = CONCAT("BKC-", LPAD(LAST_INSERT_ID(), 8, "0"));
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
        DB::unprepared('DROP TRIGGER "id_store_cus"');
    }
}
