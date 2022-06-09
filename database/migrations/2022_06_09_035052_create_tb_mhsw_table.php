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
        Schema::create('tb_mhsw', function (Blueprint $table) {
            $table->increments('mhsw_id');
            $table->string('mhsw_nim', 25);
            $table->string('mhsw_nama', 100);
            $table->string('mhsw_jurusan', 100);
            $table->string('mhsw_alamat');
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
        Schema::dropIfExists('tb_mhsw');
    }
};
