<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EasController extends Controller
{
    public function indexeas()
    {
    	// mengambil data dari table mykaryawan
        $mykaryawan = DB::table('mykaryawan')->get();

    	// mengirim data mykaryawan ke view index
    	return view('indexeas',['mykaryawan' => $mykaryawan]);

    }

        // method untuk edit data mykaryawan
    public function editmykaryawan($kodepegawai){ //ada primary key makanya ga pake dolar request
        // mengambil data mykaryawan berdasarkan id yang dipilih
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai',$kodepegawai)->get();
        // passing data mykaryawan yang didapat ke view edit.blade.php
        return view('editmykaryawan',['mykaryawan' => $mykaryawan]);
    }

    // update data mykaryawan
    public function updatemykaryawan(Request $request){
        // update data mykaryawan
        DB::table('mykaryawan')->where('kodepegawai',$request->kodepegawai)->update([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman mykaryawan
        return redirect('/mykaryawan');
    }

    public function viewmykaryawan($kodepegawai) {
        // Mengambil data mykaryawan berdasarkan kodepegawai
        $mykaryawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();

        // Cek apakah mykaryawan ditemukan
        if (!$mykaryawan) {
            abort(404, 'Karyawan tidak ditemukan.'); // Atau redirect dengan pesan error
        }

        // Mengirim data karyawan ke view detail
        return view('viewkaryawan',['mykaryawan' => $mykaryawan]);
    }
}
