<?php
//php artisan make:migration crear_tabla_permiso_rol --create=permiso_rol//
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->id();
            $table->boolean('estado');
            //para crear las relaciones entre las foreing key de dos tablas relacionadas lo hacemos de la siguiente manera// 
            //primero realizamos el unsignedinteger//
            //en este caso estamos realizando la tabla permiso rol //
            $table->unsignedInteger('rol_id');
            //segundo creamos la realacion de estas dos tablan con el foreign//
            $table->foreign('rol_id', 'fk_usuariorol_rol')->references ('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('permiso_id');
            $table->foreign('permiso_id', 'fk_permisorol_usuario')->references ('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('permiso_rol');
    }
}
