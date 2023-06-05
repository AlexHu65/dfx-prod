<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitaRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
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
      'txtNombre' => 'required',
      'txtEmail' => 'required',
      'txtApellido' => 'required',
      'txtEmail' => 'required',
      'txtEmpresa' => 'required',
      'txtTelefono' => 'required'
    ];
  }
}
