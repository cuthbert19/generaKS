<?php

namespace generaKS;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    public function interfaces() {
    	return $this->hasMany('generaKS\Interface');
    }

    public function project() {
    	return $this->belongsTo('generaKS\Project');
    }

    public function partitioning() {
    	return $this->belongsTo('generaKS\Partitioning');
    }

}
