<?php
//para crear un modelo pasamos el comando php artisan make:model Models/permiso //
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
//laravel posee una convencion la cual es que el nombre del modelo debe de ir en plural y//
//cuando esta convencion no la cumplimos en nuestromodelo entidad relacion utilizamos el //
//siguiente codigo//

    protected $table = 'permiso';
}
