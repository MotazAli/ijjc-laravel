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
        Schema::create('academy_classes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('duration');
            $table->float('price');
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
        Schema::dropIfExists('academy_classes');
    }
};
