<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;

use generaKS\Diskobject;
use generaKS\Partitioning;
use generaKS\Http\Requests\StoreCreateDiskobject;

class DiskobjectController extends Controller
{

	public function create(Request $request, Partitioning $partitioning)
	{
		
		if ($partitioning -> diskobjects -> count() > 0 ) {

			$olddiskobject = $partitioning->diskobjects->last();

		}

    	$request->session()->put('partitioning_id', $partitioning->id);

		$diskobjects = Diskobject::where('partitioning_id',$partitioning->id)->get();

		return(view('diskobjects.create', compact(
			'diskobjects', 'partitioning', 
			isset($olddiskobject) ? 'olddiskobject' : ''
			)));

	}

	public function store(StoreCreateDiskobject $request)
	{
		
		// La validazione avviene nella FormRequest StoreCreateDiskobject
        //    prima dell'esecuzione del resto del corpo del metodo store()

		// $partitioning_id = $request->session()->pull('partitioning_id');

		$newdiskobjectarray = request([
			'device', 'devicetype', 'size', 'fstype', 'logicalname'
			]);

		// dd($newdiskobjectarray);

        // aggiunge il netdevice al database
        Partitioning::find($partitioning->id) -> addDiskobject($newdiskobjectarray);


        // ritorna alla view del dettaglio dell'host
    	return redirect( '/partitioning/' . $partitioning->id . '/diskobjects');
	}

}
