<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;
use generaKS\Host;
use generaKS\Project;
use generaKS\Http\Requests\StoreCreateHost;

class HostController extends Controller
{

	// protected $project;


	// public function __construct(Project $project)
	// {

	// 	$this->project = $project;

	// }


    public function index()
    {

		return view('hosts.index')->with('hosts',Host::all());
    
    }


    public function show(Host $host)
	{

		return view('hosts.show',compact('host'));
    
    }


    /*public function create(Project $project)
    {

    	return view('hosts.create')->with('project',$project);

    }*/

    public function create(Request $request, Project $project)
    {

    	if ($project -> hosts -> count() >0 ) {

    		$oldhost = $project->hosts->last();
    	
    	}

    	// dd($project);
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

        // $newhostarray -> push(['project_id' => $project_id]);
        $newhostarray['project_id'] = "$project_id";

        // dd($newhostarray);

        // aggiunge l'host al database
    	// $project->addHost(request('name'),request('device'),request('macaddress'),$project_id,request('partitioning_id'));
        $project -> addHost($newhostarray);


        // ritorna alla view del dettaglio del progetto
    	return redirect( '/projects/' . $project->id );

    }
}
