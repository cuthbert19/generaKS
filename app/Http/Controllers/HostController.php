<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;
use generaKS\Host;

class HostController extends Controller
{
    public function index() {

		return view('hosts.index')->with('hosts',Host::all());
    }
}
