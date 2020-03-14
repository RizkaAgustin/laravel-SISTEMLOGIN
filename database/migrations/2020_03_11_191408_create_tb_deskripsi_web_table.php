<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDeskripsiWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_deskripsi_web', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_kategori_web')->references('id')->on('tb_kategori_web');
            $table->foreign('id_eselon1')->references('id')->on('tb_eselon1');
            $table->string('nama_url', 200);
            $table->string('nama_eselon', 100);
            $table->string('ipaddress', 15);
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->mediumText('image');
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
        Schema::dropIfExists('tb_deskripsi_web');
    }
}
