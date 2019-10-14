<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('songs', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('name');
            $table->unsignedBigInteger('singer_id')->nullable()->after('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('singer_id')->references('id')->on('singers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs', function (Blueprint $table) {
            //
        });
    }
}
