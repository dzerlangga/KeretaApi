<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hadir;

class input extends Controller
{
    public function index(Request $request)
    {
    	$cek = new hadir;
    	$cek->id = $request->id;
    	$cek->save();
    	return redirect('/input');

    }

    public function data()
    {
    	$data = hadir::all();
    	$data2 = hadir::all()->count();
    	return view('content.input',compact('data','data2'));

    }
}
