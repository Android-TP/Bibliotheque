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
        Schema::create('detail_scientifiques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livre_id');
            $table->string("auteur");
            $table->string("resume");
            $table->string("maison_edition");
            $table->string("isbn");
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
        Schema::dropIfExists('detail_scientifiques');
    }
};
