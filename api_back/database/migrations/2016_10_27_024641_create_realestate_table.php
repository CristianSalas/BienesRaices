<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealestateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate', function (Blueprint $table) {
            //aqui falta la foto del bien
            $table->increments('id');
            $table->string('originalCost');
            $table->string('newCost');
            $table->string('construction');
            $table->string('district');
            $table->string('canton');
            $table->string('province');
            $table->string('direction');
            $table->string('folio');
            $table->string('lot');
            $table->string('contactName');
            $table->string('contactTelephoneNumber');
            $table->string('contactEmail');
            
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
        //
    }
}
