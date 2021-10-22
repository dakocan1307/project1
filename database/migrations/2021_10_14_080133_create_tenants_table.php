<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id('tenant_id');
            $table->string('unit')->nullable(false);
            $table->string('nama')->nullable(false);
            $table->string('nomor_ktp')->nullable(false);
            $table->string('telp1')->nullable();
            $table->string('telp2')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->longText('alamat')->nullable(false);
            $table->string('apartment')->nullable(false);
            $table->string('komplek')->nullable(false);
            $table->string('tower')->nullable(false);
            $table->enum('status_hunian',['aktif','tidak aktif'])->default('tidak aktif');
            $table->enum('status_penghuni',['pemilik','penyewa'])->default('pemilik');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('edited_by')->references('id')->on('users');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
