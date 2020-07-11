<?php
// php artisan make:migration crear_tabla_usurio_rol --create=usurio_rol
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaUsurioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usurio_rol', function (Blueprint $table) {
            $table->id();
            //para crear las relaciones entre las foreing key de dos tablas relacionadas lo hacemos de la siguiente manera 
            //primero realizamos el unsignedinteger//
            //en este caso estamos realizando la tabla usuario rol //
            //unsigne por que no van a ver cantidades negativa y integer por que va ver solo un campo entero pequeño//
            $table->unsignedInteger('rol_id');
            //segundo creamos la realacion de estas dos tablan con el foreign//
            $table->foreign('rol_id', 'fk_usuariorol_rol')->references ('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('usuario_id');
            $table->foreign('usuario_id', 'fk_usuariorol_usuario')->references ('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
             //el caracter boolean nos permite ver el estado de la caja de texto si esta en un o en cero//
             $table->boolean('estado');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usurio_rol');
    }
}
