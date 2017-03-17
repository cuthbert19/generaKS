<?php

namespace generaKS\Presenters;

// use Carbon\Carbon;
use McCool\LaravelAutoPresenter\BasePresenter;

use generaKS\Netdevice;

class NetdevicePresenter extends BasePresenter
{
	
	public function linkstatus()
	{
		
		$status = $this-> wrappedObject -> linkstatus ; 

		return ( $status ? 'Up' : 'Down');
	}


	public function isbondmaster()
	{
		
		$status = $this-> wrappedObject -> isbondmaster ; 

		return ( $status ? 'Sì' : 'No');

	}

	public function bondslave()
	{
		
		$slave = $this-> wrappedObject -> bondslave ;

		if ($slave == 0) {
			
			return ('nessuno');
		
		}
		
		else {

			return ( Netdevice::where('id',$slave)->first()->name);
		
		}
	}
}
