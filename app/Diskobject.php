<?php

namespace generaKS;

use generaKS\Model;

class Diskobject extends Model
{
	public static $devicetypes=[
		'disk',
		'part',
		'volgroup',
		'logvolume'
	];

    public function partitioning(){
    
    	return $this -> belongsTo('generaKS\Partitioning');
    
    }


}
