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
        Schema::create('urunler', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->foreignId('kategori_id');
            $table->string('ad');
            $table->text('aciklama');
            $table->integer('fiyat');
            $table->string('renk');
            $table->string('beden');
            $table->string('keywords');
            $table->integer('miktar');
            $table->string('durum');
            $table->string('resim');
            $table->date('updated_at');
            $table->date('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urunler');
    }
};
