<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('password');
            $table->string('rule');
            $table->string('status');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('sekolah',function(Blueprint $table){
            $table->increments('id');
            $table->string('key');
            $table->string('nama_sekolah');
            $table->string('status_sekolah');
            $table->string('alamat_sekolah');
            $table->string('email_sekolah');
            $table->string('telp_sekolah');
            $table->string('website_sekolah');
            $table->string('logo_sekolah');
        });
        Schema::create('tim',function(Blueprint $table){
            $table->increments('id');
            $table->string('key_sekolah');
            $table->string('key');
            $table->string('nama_tim');
            $table->string('status');
        });
        Schema::create('peserta',function(Blueprint $table){
            $table->increments('id');
            $table->string('key');
            $table->string('key_tim');
            $table->string('key_sekolah');
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('kelas');
            $table->string('telp');
            $table->string('email');
            $table->string('alamat');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('sekolah');
        Schema::drop('tim');
        Schema::drop('peserta');
    }
}
