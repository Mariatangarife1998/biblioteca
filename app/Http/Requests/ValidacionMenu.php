<?php
// para crear una validacion pasamos el comando php artisan make:request//
// ValidacionMenu la validacion que creamos seria validacionmenu//
namespace App\Http\Requests;

use App\Rules\ValidarCampoUrl;
use Illuminate\Foundation\Http\FormRequest;

class ValidacionMenu extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // el false lo pasamos a true para permitir la validacion del menu //
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //ponemos las reglas de validacion que nos da laravel//
            //de igual forma podemos pasar un parametro para que no se repita los datos//
            //por ejemplo pasamos el nombre de la tabla en este caso es menu y el nombre del campo que es nombre//
            'nombre' => 'required|max:50|unique:menu,nombre,' . $this->route('id'),
            //cuando vamos a utilizar reglas la pasamos utilizando una aray//
            'url' => ['required','max:100', new ValidarCampoUrl],
            'icono' => 'nullable|max:50'
        ];
    }
  
}
