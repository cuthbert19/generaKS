<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

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

}
