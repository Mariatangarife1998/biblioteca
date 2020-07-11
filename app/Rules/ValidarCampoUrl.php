<?php
//para crear una rule pasamos el codigo php artisan make:rule ValidarCampoUrl

namespace App\Rules;

use App\Models\Admin\Menu;
use Illuminate\Contracts\Validation\Rule;

class ValidarCampoUrl implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    //pasamos el atributo ($attribute) en este caso seria url, el campo o el valor($value) seria el value// 
    public function passes($attribute, $value)
    {
        //ponemos una condicion//
        if($value ≠ '#'){
           $menu = Menu::where($attribute, $value)->get();
           return $menu->isEmpty();
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Esta url ya esta asignada';
    }
}
