<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KeranjangBelanjaController extends Controller
{
    public function indexkeranjangbelanja()
    {
    	// mengambil data dari table keranjangbelanja
    	//$keranjangbelanja = DB::table('keranjangbelanja')->get(); //array all record //get dan paginate tidak bisa dilakukan berbarengan
        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10); //function paginate
    	// mengirim data keranjangbelanja ke view index
    	return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah keranjangbelanja
    public function tambahkeranjangbelanja(){
        // memanggil view tambah
        return view('tambahkeranjangbelanja');
    }

     //method untuk insert data (store) ke table keranjangbelanja
    public function storekeranjangbelanja(Request $request){
        // insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);
        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }

    //function untuk hapus data keranjangbelanja
    public function hapuskeranjangbelanja($id){
        // menghapus data keranjangbelanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID',$id)->delete();

        // alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
}
