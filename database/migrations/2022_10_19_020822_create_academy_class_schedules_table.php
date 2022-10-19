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
        Schema::create('academy_class_schedules', function (Blueprint $table) {
            $table->id()->primary();
            $table->unsignedBigInteger('academy_class_id');
            $table->string('day_name');
            $table->string('start_at');
            $table->string('end_at');
            $table->boolean('is_active')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->foreign('academy_class_id')->references('id')->on('academy_classes')->onDelete('cascade');
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
        Schema::dropIfExists('academy_class_schedules');
    }
};
