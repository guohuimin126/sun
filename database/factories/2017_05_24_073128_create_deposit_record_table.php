<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposit_record', function (Blueprint $table) {
            $table->uuid('u_id');
            $table->decimal('rate', 5, 2);
            $table->integer('date');
            $table->decimal('new_money', 8, 2);
            $table->decimal('earning', 8, 2);
            $table->string('detail',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deposit_record');
    }
}
