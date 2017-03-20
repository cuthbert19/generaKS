<?php

namespace generaKS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEditHost extends FormRequest
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
        'name'          =>  'required',
        'macaddress'    =>  'required|regex:/' . $macRegExp . '/',
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
        'name.composite_unique' => 'Esiste già un\'hostname con questo nome nel progetto',
        'macaddress.required' =>  'Il campo MAC Address è necessario',
        'macaddress.composite_unique' => 'Questo MAC address è già assegnato ad un altro hostname nel progetto',
        'device.regex'      => 'Il MAC adress non è nel formato corretto',
        'device.required'   => 'Il campo Device per Autodeploy è necessario',
        ];

    }

}
