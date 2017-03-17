<?php

namespace generaKS;

use generaKS\Model;
use generaKS\Host;

class Project extends Model
{

    public function hosts() {

    	return $this->hasMany('generaKS\Host');

    }


    public function addHost($newhostarray)
    {

        Host::create($newhostarray);

    }
    
}
