<?php
// php artisan make:model Models/Admin/Menu//

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    //en la siguiente array [] se introducen los atributos de nuestra BD y laravel no va a permitir la modificacion y el manejo de los mismos en pocas palabras ayuda a la seguridad de nuestro proyecto//
    protected $fillable = ['nombre', 'url', 'icono']; //el fillable es donde se van a crar los campos o los atributos de la BD pertenecientes al modelo los cuales se pueden craer de una forma masiba sin la necesidad de hacer una ruta la cual sería 1- invocar el modelo 2- invocar el titulo, nombre, cantidad, etc. esro nos optimizaria tiempo//
    protected $guarded = ['id']; //guarded este atributo permite sabe r cuales on los campos que definitivamente laravel no ava  dejar modificar en este caso el id//  

    //public $timestamps = ['false']; //lo que me permite es que en el caso de no utilizar el timestamps como por ejm created_at, update_at se pasa n false si ese odelo no los usa// 
}
