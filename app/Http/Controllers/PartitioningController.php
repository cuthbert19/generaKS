<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;
use generaKS\Partitioning;

class PartitioningController extends Controller
{

    public function index()
    {

    	return view('partitionings.index')->with('partitionings', Partitioning::all());
    
    }


    public function show(Partitioning $partitioning)
    {

    	return view('partitionings.show',compact('partitioning'));
    
    }
}
