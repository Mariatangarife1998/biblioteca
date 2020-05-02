<?php
//para crear un modelo factory pasamos el comando //
//php artisan make:factory PermisoFactory //
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Models\Permiso as ModelsPermiso;


$factory->define(ModelsPermiso::class, function (Faker $faker) {
    return [
             'nombre' => $faker->word,
             'slug' => $faker->word, 
    ];
});
