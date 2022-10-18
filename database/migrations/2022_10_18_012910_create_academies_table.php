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
        Schema::create('academies', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->string('country_code')->nullable(true);
            $table->string('address');
            $table->string('owner');
            $table->string('phone')->nullable(true);
            $table->string('image')->nullable(true);
            $table->boolean('is_active')->default(0);
            $table->boolean('is_shown')->default(0);
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
        Schema::dropIfExists('academies');
    }
};
