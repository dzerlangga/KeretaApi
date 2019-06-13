<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kereta;

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

	public function rangkaian($id)
	{
		echo $id;
		$data = \DB::table('kereta')->where('id',$id);
		return view('kereta.data_rangkaian');
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
		$nama = $request->nama; 
		\DB::table('kereta')->where('id',$id)->delete();
		
	}

	public function cek()
	{
		# code...
	}
}