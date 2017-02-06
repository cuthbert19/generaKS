<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function hosts() {
    	return $this->has_many('Host');
    }
}
