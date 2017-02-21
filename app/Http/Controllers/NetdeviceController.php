<?php

namespace generaKS\Http\Controllers;

use Illuminate\Http\Request;
use generaKS\Netdevice;

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

}
