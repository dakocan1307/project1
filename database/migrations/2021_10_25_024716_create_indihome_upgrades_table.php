<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndihomeUpgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indihome_upgrades', function (Blueprint $table) {
            $table->id('ih_upgrade_id');
            $table->unsignedBigInteger('tenant_id')->nullable();

            $table->string('no_inet')->nullable();
            $table->string('no_telp1')->nullable();
            $table->string('no_telp2')->nullable();
            $table->string('pass_stb')->nullable();
            $table->string('sn_ont')->nullable();
            $table->string('sn_stb')->nullable();
            $table->string('paket')->nullable();
            $table->string('harga_paket')->nullable();
            $table->string('income_fix')->nullable();
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
        Schema::dropIfExists('indihome_upgrades');
    }
}
