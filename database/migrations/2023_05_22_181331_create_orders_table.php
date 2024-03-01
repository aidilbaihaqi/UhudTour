<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('umrah_id')->nullable();
            $table->unsignedBigInteger('haji_id')->nullable();
            $table->foreign('umrah_id')->references('id')->on('umrahs')->onDelete('cascade');
            $table->foreign('haji_id')->references('id')->on('hajis')->onDelete('cascade');
            $table->string('nama');
            $table->integer('umur');
            $table->text('alamat');
            $table->string('telp');
            $table->integer('jamaah');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
