<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get(); //array all record //get dan paginate tidak bisa dilakukan berbarengan
        $pegawai = DB::table('pegawai')->paginate(10); //function paginate
    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);

    }
}
