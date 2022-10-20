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
        Schema::create('affiliates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_academy_id');
            $table->unsignedBigInteger('affiliate_academy_id');
            $table->boolean('is_active')->default(0);
            $table->boolean('is_deleted')->default(0);
            $table->foreign('parent_academy_id')->references('id')->on('academies')->onDelete('cascade');
            $table->foreign('affiliate_academy_id')->references('id')->on('academies')->onDelete('cascade');
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
        Schema::dropIfExists('affiliates');
    }
};
