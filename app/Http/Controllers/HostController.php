<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;
use generaKS\Host;
use generaKS\Project;
use generaKS\Http\Requests\StoreCreateHost;
use generaKS\Http\Requests\StoreEditHost;

class HostController extends Controller
{
    public function index()
    {

      return view('hosts.index')->with('hosts',Host::paginate(5));
    
    }


    public function show(Host $host)
    {

      return view('hosts.show',compact('host'));

    }


    public function create(Request $request, Project $project)
    {

        if ($project -> hosts -> count() >0 ) {

            $oldhost = $project->hosts->last();

        }

        $request->session()->put('project_id', $project->id);

        return view('hosts.create',compact('project',isset($oldhost) ? 'oldhost' : ''));

    }


    public function store(StoreCreateHost $request)
    {

    	/*$this -> validate(request(),[

    		'name' => 'required|unique:hosts',
    		'macaddress' => 'required|unique:hosts',

         ]);*/

        // La validazione avviene nella FormRequest StoreCreateHost
        //    prima dell'esecuzione del resto del corpo del metodo store()


        // recupera project_id dalla sessione e valorizza $project
        $project_id = $request->session()->pull('project_id');

        $project = Project::find($project_id);

        // crea un array da passare alla funzione helper per la creazione dell'host
        $newhostarray =  request(['name','device','macaddress','partitioning_id']);

        $newhostarray['project_id'] = "$project_id";

        // aggiunge l'host al database
        $project -> addHost($newhostarray);

        $request->session()->forget('urlBack');

        // ritorna alla view del dettaglio del progetto
        return redirect( '/projects/' . $project->id )->with(['success' => 'Host ' . request('name') . ' creato con successo']);

    }


    public function edit(Request $request, Host $host)   
    {

        $project = Project::find($host->project_id);

        $request->session()->put('project_id', $project->id);

        // dd($request->session());

        return view('hosts.edit',compact('host','project'));

    }


    public function update(StoreEditHost $request, Host $host)
    {

        // dd($request->session());
        $project_id = $request->session()->pull('project_id');

        $newHostArray = request(['name','device','macaddress','partitioning_id']);
        $newHostArray['project_id'] = $project_id;

        $host -> update($newHostArray);

        $request->session()->forget('urlBack');

        // ritorna alla view del dettaglio del progetto
        return redirect('/hosts/' . $host->id)->with(['success' => 'Host ' . request('name') . ' modificato con successo']);


    }
}
