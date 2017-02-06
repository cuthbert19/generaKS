<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    public function interfaces() {
    	return $this->has_many('Interface');
    }

    public function Project() {
    	return $this->belongs_to('Project');
    }

    public function Partitioning() {
    	return $this->belongs_to('Partitioning');
    }

}
