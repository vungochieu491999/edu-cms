<?php
namespace Edumad\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name' => 'required|min:2|max:191',
            'last_name'  => 'required|min:2|max:191',
            'password'   => 'min:6|max:191',
            'password_confirmation'   => 'same:password',
            'email'      => 'required|email|unique:users,email',
//            'avatar' => 'required|image',
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => trans('field_name.first_name'),
            'last_name'  => trans('field_name.last_name'),
        ];
    }

}
