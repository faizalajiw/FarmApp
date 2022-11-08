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
        Schema::create('livestocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('cages_id');
            $table->string('code');
            $table->string('name');
            $table->string('image')->nullable();
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->date('birth_day');
            $table->string('body_weight');
            $table->string('body_height');
            $table->string('condition');
            $table->softDeletes();
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
        Schema::dropIfExists('livestocks');
    }
};
