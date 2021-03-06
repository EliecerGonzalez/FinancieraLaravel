<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriasTable extends Migration
{
    public function up()
    {
      Schema::create('categorias', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre');
          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
