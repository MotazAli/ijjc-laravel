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
        Schema::create('user_academies', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('academy_id');
            $table->date('start_at')->nullable(true);
            $table->date('end_at')->nullable(true);
            $table->boolean('is_athelete_shown')->default(0);
            $table->boolean('is_current')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('academy_id')->references('id')->on('academies')->onDelete('cascade');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
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
        Schema::dropIfExists('user_academies');
    }
};
