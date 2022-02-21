<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('service_designation');
            $table->string('service_description');
            $table->unsignedBigInteger('statut_id');
            $table->datetime('service_date_creation');
            $table->unsignedBigInteger('service_date_creation_par');
            $table->datetime('service_derniere_modif');
            $table->unsignedBigInteger('service_date_derniere_modif_par');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
