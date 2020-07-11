<?php
//para crear un controlador en una carpeta espesifica en este caso lo creamos//
//en la carpeta Admin se ejeuta el sg cod: php artisan make:controller Admin/PermisoController -r//
//es decir php artisan make:controller a ca especificamos en que carpeta lo vamos a crear en este caso es//
//la carpeta Admin y por consiguiente ponemos el nombre de nuestro controlador Admin/PermisoController -r//

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // de esta manera pasando el dd el me va a mostrar lo que esta en el index es decir es una //
        // prueba piloto para saber si este esta funcionando y me esta retornando la orden que yo le estoy dando ejm dd('hola');
           
        //para listar los permiso se ejecuta el siguiente codigo//
           $permisos = Permiso::orderBy('id')->get();
            //para pasar una variable a laravel lo hacemos pasando depuesde este codigo 'admin.permiso.index',//
            //no un compact sino un ['permisos'=>$permisos], pero para hacerlo de una forma mas cencilla pasamos el compact//
            return view('admin.permiso.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('admin.permiso.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function mostrar($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
    }
}
