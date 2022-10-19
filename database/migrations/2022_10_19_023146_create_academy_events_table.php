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
        Schema::create('academy_events', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('title');
            $table->string('description');
            $table->string('image');
            $table->date('start_at');
            $table->date('end_at');
            $table->string('start_time_at');
            $table->string('end_time_at');
            $table->boolean('is_active')->default(0);
            $table->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('academy_events');
    }
};
