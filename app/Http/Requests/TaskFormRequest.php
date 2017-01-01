<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;
use Auth;

class PostFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      if($this->user()->can_make_task())
      {
      return true;
      }
      return false;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        'nama_os' => 'required|unique:posts|max:255',
        'nama_os' => array('Regex:/^[A-Za-z0-9 ]+$/'),
        ];

    }
}
