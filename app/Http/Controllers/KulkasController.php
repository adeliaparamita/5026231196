<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KulkasController extends Controller
{
    public function indexkulkas()
    {
    	// mengambil data dari table kulkas
    	//$kulkas = DB::table('kulkas')->get(); //array all record //get dan paginate tidak bisa dilakukan berbarengan
        $kulkas = DB::table('kulkas')->paginate(10); //function paginate
    	// mengirim data kulkas ke view index
    	return view('indexkulkas',['kulkas' => $kulkas]);
    }

    // method untuk menampilkan view form tambah kulkas
    public function tambahkulkas(){
        // memanggil view tambah
        return view('tambahkulkas');
    }

    //method untuk insert data (store) ke table kulkas
    public function storekulkas(Request $request){
        // Validasi input
        $request->validate([
            'merkkulkas' => 'required|string|max:25',
            'hargakulkas' => 'required|numeric', // Validasi ini memastikan bahwa inputnya adalah angka
            'tersedia' => 'required|boolean',
            'diskon' => 'required|numeric|between:0,1',
        ]);
        // insert data ke table kulkas
        DB::table('kulkas')->insert([
            'merkkulkas' => $request->merkkulkas,
            'hargakulkas' => $request->hargakulkas,
            'tersedia' => $request->tersedia,
            'diskon' => $request->diskon
        ]);
        // alihkan halaman ke halaman kulkas
        return redirect('/kulkas');
    }

    // method untuk edit data kulkas
    public function editkulkas($id){ //ada primary key makanya ga pake dolar request
        // mengambil data kulkas berdasarkan id yang dipilih
        $kulkas = DB::table('kulkas')->where('ID',$id)->get();
        // passing data kulkas yang didapat ke view edit.blade.php
        return view('editkulkas',['kulkas' => $kulkas]);
    }

    // update data kulkas
    public function updatekulkas(Request $request){
        // update data kulkas
        DB::table('kulkas')->where('ID',$request->ID)->update([
            'merkkulkas' => $request->merkkulkas,
            'hargakulkas' => $request->hargakulkas,
            'tersedia' => $request->tersedia,
            'diskon' => $request->diskon
        ]);
        // alihkan halaman ke halaman kulkas
        return redirect('/kulkas');
    }

    //function untuk hapus data kulkas
    public function hapuskulkas($id){
        // menghapus data kulkas berdasarkan id yang dipilih
        DB::table('kulkas')->where('ID',$id)->delete();

        // alihkan halaman ke halaman kulkas
        return redirect('/kulkas');
    }

    //function untuk cari
    public function carikulkas(Request $request){
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table kulkas sesuai pencarian data
		$kulkas = DB::table('kulkas')
		->where('merkkulkas','like',"%".$cari."%")
		->paginate();

    	// mengirim data kulkas ke view index
		return view('indexkulkas',['kulkas' => $kulkas]);
	}
}
