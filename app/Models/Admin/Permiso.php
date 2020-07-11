<?php
//para crear un modelo pasamos el comando php artisan make:model Models/permiso //
//para crear un modelo que se encuentra en una carpeta espesificamos la carpeta//
//y luego el nombre de la carpeta de  la siguiente manera php artisan make:Model Models/Admin/Permiso//
//es decir el modelo de nombre permiso se va a crear en la sub carpeta Models la cual a su vez se encuentra en la carpeta Model//  
namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //laravel posee una convencion la cual es que el nombre del modelo debe de ir en plural y//
//cuando esta convencion no la cumplimos en nuestromodelo entidad relacion utilizamos el //
//siguiente codigo//

protected $table = 'permiso';
}
