<?php

namespace generaKS;

use generaKS\Model;
use generaKS\Presenters\NetdevicePresenter;
use McCool\LaravelAutoPresenter\HasPresenter;

use generaKS\Host;

class Netdevice extends Model implements HasPresenter
{

	protected $isEditable = false;

    public function host() {

    	return $this->belongsTo('generaKS\Host');

    }


    public function getPresenterClass()
    {
    	return NetdevicePresenter::class;
    }


    public function updateFields($newNetdevArray)
    {
    	$this -> fill($newNetdevArray);

    	$this -> save();
    }


}
