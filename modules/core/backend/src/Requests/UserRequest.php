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
            'first_name' => 'required|min:2|max:255',
            'email' => 'required|email|unique,users',
//            'avatar' => 'required|image',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'min' => ':attribute tối thiểu có 2 ký tự',
            'max' => ':attribute tối đa có 255 ký tự',
            'email' => ':attribute không đúng định dạng',
            'unique' => ':attribute đã tồn tại',
            'same' => ':attribute không khớp',
            'image' => ':attribute phải là hình ảnh'
        ];
    }
    public function attributes()
    {
        return [
            'first_name' => 'Tên thành viên',
            'email' => 'Địa chỉ email',
//            'avatar' => 'File upload'
        ];
    }

}
