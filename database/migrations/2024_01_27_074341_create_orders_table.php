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
            $table->enum('status', ['1', '0'])->default('1');
            $table->datetime('date_add')->nullable();
            $table->datetime('date_end')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('user_id_text', 300)->nullable();
            $table->string('user_fullname', 300)->nullable();
            $table->integer('book_1_id')->nullable();
            $table->string('book_1_title', 300)->nullable();
            $table->integer('book_2_id')->nullable();
            $table->string('book_2_title', 300)->nullable();
            $table->integer('book_3_id')->nullable();
            $table->string('book_3_title', 300)->nullable();
            $table->integer('book_4_id')->nullable();
            $table->string('book_4_title', 300)->nullable();
            $table->integer('book_5_id')->nullable();
            $table->string('book_5_title', 300)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
