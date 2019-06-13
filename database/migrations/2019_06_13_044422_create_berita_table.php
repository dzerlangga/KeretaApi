<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor');
            $table->string('kondisi_cctv_1');
            $table->string('kondisi_cctv_2');
            $table->string('kondisi_pids_1');
            $table->string('kondisi_pids_2');
            $table->string('kondisi_pids_3');
            $table->string('kondisi_pids_4');
            $table->string('gambar_cctv_1');
            $table->string('gambar_cctv_2');
            $table->string('gambar_pids_1');
            $table->string('gambar_pids_2');
            $table->string('gambar_pids_3');
            $table->string('gambar_pids_4');
            $table->text('tindakan_cctv_1');
            $table->text('tindakan_cctv_2');
            $table->text('tindakan_pids_1');
            $table->text('tindakan_pids_2');
            $table->text('tindakan_pids_3');
            $table->text('tindakan_pids_4');
            $table->string('gambar_setelah_cctv_1');
            $table->string('gambar_setelah_cctv_2');
            $table->string('gambar_setelah_pids_1');
            $table->string('gambar_setelah_pids_2');
            $table->string('gambar_setelah_pids_3');
            $table->string('gambar_setelah_pids_4');
            $table->integer('id_gerbong');
            $table->integer('id_user');
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
        Schema::dropIfExists('berita');
    }
}
