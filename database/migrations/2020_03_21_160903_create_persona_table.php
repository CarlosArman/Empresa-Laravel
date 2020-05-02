<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->string('cPerApellido',50)->index()->collation('utf8_unicode_ci')->nullable();
            $table->string('cPerNombre',50)->index()->collation('utf8_unicode_ci')->nullable();
            $table->string('cPerDireccion',100)->collation('utf8_unicode_ci')->nullable();
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo',6, 2);
            $table->string('cPerRnd',50)->collation('utf8_unicode_ci')->nullable();
            $table->char('nPerEstado',1)->default(1)->collation('utf8_unicode_ci');
            $table->string('remember_token',100)->collation('utf8_unicode_ci')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
