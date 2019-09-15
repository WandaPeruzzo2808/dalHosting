<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('producto');
            $table->string('descripcion')->nullable();
            $table->string('categoria')->nullable();
            $table->string('cod_prov1')->nullable();
            $table->string('cod_prov2')->nullable();
            $table->decimal('precio',7,2)->nullable();
            $table->decimal('precio_uss',6,2)->nullable();
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
        Schema::dropIfExists('productos');
    }
}
