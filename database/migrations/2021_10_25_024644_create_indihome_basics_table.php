<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndihomeBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indihome_basics', function (Blueprint $table) {
            $table->id('ih_basic_id');
            $table->unsignedBigInteger('tenant_id')->nullable();

            $table->string('no_inet_basic')->nullable();
            $table->string('no_telp1_basic')->nullable();
            $table->string('no_telp2_basic')->nullable();
            $table->string('pass_stb_basic')->nullable();
            $table->string('sn_ont_basic')->nullable();
            $table->string('sn_stb_basic')->nullable();
            $table->string('payment_basic')->nullable();
            $table->enum('status_layanan',['cl','tidak cl'])->default('tidak cl');
            $table->enum('status',['aktif','tidak aktif'])->default('aktif');
            $table->enum('status_payment',['aktif','tidak aktif'])->default('aktif');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('edited_by')->nullable();

            $table->foreign('tenant_id')->references('tenant_id')->on('tenants');
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
        Schema::dropIfExists('indihome_basics');
    }
}
