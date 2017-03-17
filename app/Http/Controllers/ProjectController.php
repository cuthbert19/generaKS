<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;
use generaKS\Project;

class ProjectController extends Controller
{

	public function index(Project $project)
	{

		return view('projects.index');

	}


    public function show(Project $project)
    {

    	return view('projects.show',compact('project'));

    }


    public function create()
    {

    	return view('projects.create');
    
    }

    public function store()
    {

    	$this->validate(request(),[
			'name' => 'required',
			'ipVM'  => 'required', 
			'subnetVM'  => 'required', 
		]);

		Project::create([

			'name' => request('name'),

			'ipVM' => request('ipVM'),

			'subnetVM' => request('subnetVM'),

		]);

		return redirect('/projects');    	

    }


}
