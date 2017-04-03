<?php

namespace generaKS\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCreateNetDevice extends FormRequest
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

        // extends Validator only for this request
        \Validator::extend( 'composite_unique', function ( $attribute, $value, $parameters, $validator ) {

            if ($attribute=='pcislot' and $value=='none') {
                return true;
            }

            // remove first parameter and assume it is the table name
            $table = array_shift( $parameters ); 

            // start building the conditions
            $fields = [ $attribute => $value ]; // current field

            // iterates over the other parameters and build the conditions for all the required fields
            while ( $field = array_shift( $parameters ) ) {
                $fields[ $field ] = $this->get( $field );
            }

            // query the table with all the conditions
            $result = \DB::table( $table )->select( )->where( $fields )->first();

            return empty( $result ); // edited here
        });

        // always defined rules
        $rules = [
        'name'      =>  'required|composite_unique:netdevices,host_id',
        'pcislot'   =>  'required|composite_unique:netdevices,host_id',
        ];

        $request = $this->request;

        // other-field-based rules
        if ($request->get('linkstatus') == 1) {

            if ( ($request->get('isbondmaster') == 1) or ($request->get('bondslave') == 0) ) {

                $rules['ipaddr'] = 'required|ipv4';
                $rules['netmask'] = 'required|ipv4';  
            } 

        }

        if ($request->get('bcksubnet') != '') {

            $rules['bcksubnet'] = 'ipv4';
            $rules['bckmask'] = 'required|ipv4';
        }
        
        return  $rules;
    }


    public function messages()
    {

        return [
        'name.required' =>  'Il campo Net device è necessario',
        'pcislot.required' =>  'Il campo PCI Slot è necessario (inserire \'none\' in caso di bond master)',
        'ipaddr.required' => 'Il campo IP Address non può essere vuoto se l\'interfaccia è up e non è una slave',
        'ipaddr.ipv4' => 'Il campo IP Address non è nel formato corretto',
        'netmask.required' => 'Il campo Netmask non può essere vuoto se èrichiesto l\'IP Address',
        'netmask.ipv4' => 'Il campo Netmask non è nel formato corretto',
        'gateway.ipv4' => 'Il campo Gateway non è nel formato corretto',
        'bcksubnet.ipv4' => 'Il campo IP Subnet Backup non è nel formato corretto',
        'bckmask.required' => 'Il campo Mask per subnet Backup è necessario se hai indicato la subnet di backup' ,
        'bckmask.ipv4' => 'Il campo Mask per subnet Backup non è nel formato corretto',
        'name.composite_unique' => 'Esiste già un\'interfaccia con questo nome configurata sull\'host',
        'pcislot.composite_unique' => 'Esiste già un\'interfaccia con questo PCI slot configurata sull\'host',
        ];

    }
}
