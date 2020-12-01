<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->float('precio');
            $table->string('Forma_pago', 25);
            $table->string('nombre_comprador', 50);
            $table->string('correo', 100);
            $table->string('direccion', 100);
            $table->string('telefono', 15);
            $table->foreignId('id_contrato')->constrained('contratos');
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
        Schema::dropIfExists('ventas');
    }
}
