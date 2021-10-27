<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetzapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netzaps', function (Blueprint $table) {
            $table->id('netzap_id');
            $table->unsignedBigInteger('tenant_id')->nullable();

            $table->string('pppoe')->nullable();
            $table->string('pass_pppoe')->nullable();
            $table->string('ip_public')->nullable();
            $table->string('gateway')->nullable();
            $table->string('subnetmask')->nullable();
            $table->string('dns1')->nullable();
            $table->string('dns2')->nullable();
            $table->string('paket_netzap')->nullable();
            $table->string('harga_paket_netzap')->nullable();
            $table->string('income_fix_netzap')->nullable();
            $table->enum('status',['aktif','tidak aktif'])->default('aktif');

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
        Schema::dropIfExists('netzaps');
    }
}
