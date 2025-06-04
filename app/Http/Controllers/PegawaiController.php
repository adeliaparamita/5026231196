<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{
    //
    public function index($nama){
     return $nama;
    }

    public function formulir(){

    	return view('formulir');

    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama."<br> Alamat : ".$alamat ."<br> Aslinya: " . $request;
    }

    //method tambah (tutor malas ngoding 10)
    // method untuk menampilkan view form tambah pegawai
    public function tambah(){

        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request){
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

/*     public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'pekerjaan' => 'required',
           'usia' => 'required|numeric'
        ]);

        return view('proses',['data' => $request]);
    } */

    // method untuk edit data pegawai
    public function edit($id){ //ada primary key makanya ga pake dolar request
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request){
        // update data pegawai
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //function untuk hapus data pegawai
    public function hapus($id){
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('pegawai_id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    //function untuk cari
    public function cari(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);
	}
}
