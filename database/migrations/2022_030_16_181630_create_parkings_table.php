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
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("service_id")->nullable();
            $table->foreignId("parking_center_id");
            $table->string("parking_type")->default("indoor");
            $table->string("pickup_address");
            $table->string("drop_address");
            $table->string("start_data");
            $table->string("end_date");
            $table->enum("status",["pending","confirm","picked","parked","drop","done"])->default("pending");
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
        Schema::dropIfExists('parkings');
    }
};
