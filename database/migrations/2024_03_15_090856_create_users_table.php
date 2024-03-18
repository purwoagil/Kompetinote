<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
                $table->id();
                $table->string('NIM', 20)->unique();
                $table->string('Nama', 100);
                $table->string('password', 500);
                $table->string('email', 50)->unique();
                $table->string('EmailOff', 50)->nullable();
                $table->string('EmailStaff', 50)->nullable();
                $table->string('No_hp', 30);
                $table->string('Role', 30)->default("Mahasiswa");;
                $table->string('Fakultas', 100)->nullable();
                $table->string('Prodi', 100)->nullable();
                $table->string('CreatedBy', 50)->default("User Registration");
                $table->string('UpdatedBy', 50)->nullable();
                $table->string('Angkatan', 100)->nullable();
                $table->bigInteger('NIK')->nullable();
                $table->bigInteger('No_Rek')->nullable();
                $table->string('Foto', 100)->nullable();
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
        Schema::dropIfExists('users');
    }
}
