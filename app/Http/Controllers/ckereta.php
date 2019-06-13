<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kereta;
use App\rangkaian;

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

	public function rangkaian($id)
	{
		$data = rangkaian::where('id_kereta',$id)->get();
		$kereta = \DB::table('kereta')->where('id',$id)->get();
		// dd($data);
		return view('kereta.data_rangkaian',compact('data','kereta'));
	}


	public function plus_rangkaian(Request $request,$id)
	{
		$rangkaianplus = new rangkaian;
		$rangkaianplus->no_rangkaian = $request->no_rangkaian;
		$rangkaianplus->id_kereta = $id;
		$rangkaianplus->save();
		return redirect('/rangkaian/'.$id); 
	}

	public function edit_rangkaian(Request $request,$id)
	{
		$id_r = $request->id;
		$no = $request->no_rangkaian;
		\DB::table('rangkaian')->where('id',$id_r)->update([
			'no_rangkaian' =>$no,
		]);
		return redirect('/rangkaian/'.$id);
	}

	public function hapus_rangkaian(Request $request)
	{
		$id = $request->kode;
		\DB::table('rangkaian')->where('id',$id)->delete();
	}


}