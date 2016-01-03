<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\materi;
use DB;

class MateriController extends Controller
{

		public function tampil(){
		// $data = DB::select('select * from materis');
		// return view('home')->with('data', $data);
		
		$data = DB::table('materis')->get();
		return view('home')->with('data', $data);
		
		// $data=materi::all();
		// return view('home')->with('data', $data);



	}
}
