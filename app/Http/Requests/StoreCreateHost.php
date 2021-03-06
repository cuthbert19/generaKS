<?php

namespace generaKS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreateHost extends FormRequest
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

        $macRegExp = "^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$";

        $rules = [
        'name'          =>  'required|unique:hosts',
        'macaddress'    =>  'required|unique:hosts|regex:/' . $macRegExp . '/',
        'device'        =>  'required',
        ];

        // dd($rules);
        return $rules;

    }


    /**
     * Customize the error messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {

        return [
            'name.required' =>  'Il campo Hostname è necessario',
            'name.unique'   =>  'E\' già presente un host con questo nome',
            'macaddress.required' =>  'Il campo MAC Address è necessario',
            'macaddress.unique'   =>  'Questo MAC Address è già presente',
        ];

    }

}
