<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

class Netdevice extends Model
{
    public function host() {

    	return $this->belongsTo('generaKS\Host');

    }

}
