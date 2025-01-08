<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCsiProyekTable extends Migration
{
    public function up()
    {
        Schema::create('csi_proyek', function (Blueprint $table) {
            $table->unsignedBigInteger('id_proyek')->autoIncrement()->primary();
            $table->string('uid_proyek')->unique();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id_user')->on('csi_user')->onDelete('cascade');
            $table->string('judul_proyek');
            $table->longText('deskripsi_proyek');
            $table->text('file_proyek')->nullable();
            $table->text('bukti_proyek')->nullable();
            $table->string('partner_proyek')->nullable();
            $table->dateTime('tgl_mulai')->nullable();
            $table->dateTime('tgl_selesai')->nullable();
            $table->dateTime('tgl_upload')->nullable();
            $table->enum('status', ['P', 'I'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('csi_proyek');
    }
}
