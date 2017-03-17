<?php

namespace generaKS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreateDiskobject extends FormRequest
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
        'device'      =>  'required',
        ];
    }


    public function messages()
    {

        return [
        'device.required' =>  'Il campo Device/Mountpoint è necessario',
        ];

    }
}
