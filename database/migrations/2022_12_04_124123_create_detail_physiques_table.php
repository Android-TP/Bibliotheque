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
        Schema::create('detail_physiques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('livre_id');
            $table->string("couleur");
            $table->integer("largeur");
            $table->integer("longeur");
            $table->integer("nombre_page");
            $table->string("image")->nullable();
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
        Schema::dropIfExists('detail_physiques');
    }
};
