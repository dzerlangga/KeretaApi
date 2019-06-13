<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kereta;
use App\gerbong;

class ckereta extends Controller
{
	public function index()
	{
		$data = kereta::all();
		return view('kereta.management_kereta',compact('data'));
	}

	public function edit(Request $request)
	{
		$id = $request->id;
		$nama = $request->nama;
		\DB::table('kereta')->where('id',$id)->update([
			'nama' =>$nama,
		]);
		return redirect('/ker'); 

	}

	public function plus(Request $request)
	{
		$keretaplus = new kereta;
		$keretaplus->nama = $request->nama;
		$keretaplus->save();
		return redirect('/ker'); 
	}

	public function hapus(Request $request)
	{
		$id = $request->kode;
		\DB::table('kereta')->where('id',$id)->delete();
	}

	public function gerbong($id)
	{
		$data = gerbong::where('id_kereta',$id)->get();
		$kereta = \DB::table('kereta')->where('id',$id)->get();
		// dd($data);
		return view('kereta.data_gerbong',compact('data','kereta'));
	}


	public function plus_gerbong(Request $request,$id)
	{
		$gerbong = new gerbong;
		$gerbong->no_gerbong = $request->no_gerbong;
		$gerbong->id_kereta = $id;
		$gerbong->save();
		return redirect('/gerbong/'.$id); 
	}

	public function edit_gerbong(Request $request,$id)
	{
		$id_r = $request->id;
		$no = $request->no_gerbong;
		\DB::table('gerbong')->where('id',$id_r)->update([
			'no_gerbong' =>$no,
		]);
		return redirect('/gerbong/'.$id);
	}

	public function hapus_gerbong(Request $request)
	{
		$id = $request->kode;
		\DB::table('gerbong')->where('id',$id)->delete();
	}

	public function berita_gerbong($id)
	{
		echo $id;
		// return view('kereta.gerbong');
	}


}