<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturacions', function (Blueprint $table) {
            $table->id();
            $table->string('mes a pagar', 20);
            $table->string('concepto', 100);
            $table->float('valor');
            $table->string('deducciones', 100);
            $table->float('total_pagar');
            $table->string('telefono', 15);
            $table->foreignId('id_alquiler')->constrained('alquilers');
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
        Schema::dropIfExists('facturacions');
    }
}
