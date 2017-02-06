<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

class Interface extends Model
{
    public function Host() {
    	return $this->belongs_to('Host');
    }
}
