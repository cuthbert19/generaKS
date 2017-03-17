<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;

use generaKS\Host;
use generaKS\Netdevice;
use generaKS\Http\Requests\StoreCreateNetDevice;

class NetdeviceController extends Controller
{

    public function index()
    {

    	return view('netdevices.index')->with('netdevices',Netdevice::all());

    }


    public function show(Netdevice $netdevice)
    {

    	return view('netdevices.show',compact('netdevice'));

    }


    public function create(Request $request, Host $host)
    {

    	if ($host -> netdevices -> count() > 0 ) {

    		$oldnetdevice = $host->netdevices->last();
    	
    	}

    	// dd($host);
        $request->session()->put('host_id', $host->id);

        $netdevices = Netdevice::where('host_id',$host->id)->get();

        $bondmasters = $host->bondmasters();

        // dd($netdevices);

    	return view('netdevices.create',compact(
            'host', 'netdevices', 'bondmasters', isset($oldnetdevice) ? 'oldnetdevice' : '')
        );

    }


    public function store(StoreCreateNetDevice $request)
    {

        // La validazione avviene nella FormRequest StoreCreateNetdevice
        //    prima dell'esecuzione del resto del corpo del metodo store()


        // recupera host_id dalla sessione
        $host_id = $request->session()->pull('host_id');

        // crea un array da passare alla funzione helper per la creazione del netdevice
        $newnetarray =  request(['name','pcislot','linkstatus','isbondmaster','bondslave',
            'ipaddr','netmask','gateway',
            'bcksubnet','bckmask'
        ]);

        // $newnetarray['host_id'] = "$host_id";

        // dd($newnetarray);

        // aggiunge il netdevice al database
        Host::find($host_id) -> addNetdevice($newnetarray);


        // ritorna alla view del dettaglio dell'host
    	return redirect( '/hosts/' . $host_id .'/netdevices');

    }

    public function edit(Netdevice $netdevice)
    {
        
        // $netdevice -> makeEditable();

        // dd($netdevice);

        $host = Host::find($netdevice->host_id);

        $netdevices = Netdevice::where('host_id',$host->id)->get();

        $bondmasters = $host->bondmasters();

        return view('netdevices.edit',compact('netdevice','host','netdevices','bondmasters'));
        // return redirect('/hosts/' . $netdevice->host_id . '/netdevices');

    }

    public function update(StoreCreateNetdevice $request, Netdevice $netdevice)
    {
        
         $newNetdevArray = request([
            'name', 'pcislot', 'linkstatus','isbondmaster','bondslave',
            'ipaddr', 'netmask','gateway',
            'bcksubnet', 'bckmask',
            ]);

         $netdevice -> update($newNetdevArray);

         return redirect('/hosts/' . $netdevice->host_id . '/netdevices');

    }

}
