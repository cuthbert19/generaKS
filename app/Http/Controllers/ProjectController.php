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


}
