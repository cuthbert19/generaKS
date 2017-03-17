<?php

namespace generaKS;

use generaKS\Model;
use generaKS\Netdevice;

class Host extends Model
{
    public function netdevices() {
    	return $this->hasMany('generaKS\Netdevice');
    }

    public function project() {
    	return $this->belongsTo('generaKS\Project');
    }

    public function partitioning() {
    	return $this->belongsTo('generaKS\Partitioning');
    }

    public function addNetdevice($newnetdevice)
    {

        $this -> netdevices() -> create($newnetdevice);

    }    

    public function bondmasters()
    {
        
        return $this->netdevices()->where('isbondmaster',true)->get();

    }

}
