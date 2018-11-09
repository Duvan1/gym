<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrnMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trn_measurements', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('member_id')->index('FK_trn_measurementss_mst_members_1')->comment('links to unique record id of mst_members');
            $table->date('start_date')->comment('start date of measurementss');
            $table->float('height');
            $table->float('weight');
            $table->float('chest_measure');
            $table->float('shouldert_measure');
            $table->float('arm_measure');
            $table->float('waist_measure');
            $table->float('forearm_measure');
            $table->float('thigh_measure');
            $table->float('hip_measure');
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
        //
    }
}
