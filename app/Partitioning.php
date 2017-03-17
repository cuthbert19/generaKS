<?php

namespace generaKS;

use generaKS\Model;

class Partitioning extends Model
{

    public function diskobjects() {

    	return $this->hasMany('generaKS\Diskobject');

    }


    public function hosts() {

    	return $this->hasMany('generaKS\Host');

    }
    
}
