<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugColumnToCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::table('category', function (Blueprint $table) {
            //
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::table('category', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
        });
    }
}
