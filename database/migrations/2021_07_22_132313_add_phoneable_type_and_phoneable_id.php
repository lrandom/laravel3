<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneableTypeAndPhoneableId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('home_phone', 10)->nullable(true);
            $table->string('personal_phone', 10)->nullable(true);
            $table->integer('phoneable_id');
            $table->string('phoneable_type', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        //
        Schema::dropIfExists('phones');
    }
}
