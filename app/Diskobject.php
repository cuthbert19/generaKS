<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

class Diskobject extends Model
{

    public function partitioning(){
    
    	return $this -> belongsTo('generaKS\Partitioning');
    
    }

}
