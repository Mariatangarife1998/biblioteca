<?php
//php artisan migrate:refresh con este comando migramos todas las tablas que creamos en nuestro entorno de trabajo//
// // <!-- //comando para crear una migracion en la terminal php artisan make:migration create_usuario_table o// 
// // php artisan make:migration crear_tabla_usuario, cuando ejecutamos la creacion en eespañol el solo me va //
// // crear los dos campos up y down pero sin ninguna yuda, ya que el no reconoce el parametro crear y tabla,//
// // para que laravel me yude a crear la tabla con los parametros y los campos requeridos o estructura principal// 
// // ejecutamos el sig codigo php artisan make:migration crear_tabla_usuario con los siguientes parametros --create=usuario  //
// // para consultar una ayuda de como podemos utilizar artisan solo pasamos el comando php artisan // -->

// <!-- //*para correr la migracion ejecutamos el sig comando php artisan migrate//
// // en caso tal de que nos salga un error ejecutamos el comando php artisan config:cache, esto se hace cada vez que se modifique en .env//
// // si el error persiste entonces ejecutamos el comando php artisan optimize//
// // si el error continua ejecutar php artisan clear//
// // si el error persiste php artisan clear-compiled//
// // composer dumpautoload*// -->

// <!-- //para reversar una migracion pasamos el comando php artisan migrate:reset, al ejecutar este //
// comando, este nos devuelve las columnas que se crearon en la BD y solo quedaria la de migraciones// -->


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // el metodo up es el metodo que corre cuando yo corro una migracion,//
    // para instalar o ejecutar la migracion//
    public function up()
    {
        //schema es una clase, con el metodo create, con los parametros que estan dentro del parentecis// 
        //en este caso seria usuario y con sigo crea unos campos los cuales son en este caso id y timestamps//
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            //crecion de campos en nuestra vace de datos, pasamos las valibles que en este caso seria//
            //$table, de tipo varchar que esn este codigo seria = es string, pasamos los parametros que//
            //serian usuario y 50//
            $table->string('usuario', 50);
            $table->string('password', 100);
            $table->string('nombre', 50)->unique();
            $table->timestamps();
            //con este comando puedo eliminar los datos que ya he introducido en la BD php artisan migrate:refresh//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    // el metodo down es para reversar lo que se realizo en el metodo up//
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
