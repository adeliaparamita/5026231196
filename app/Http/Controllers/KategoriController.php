<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    // Menampilkan combo box kategori
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('indexkategori', compact('kategori'));
    }

    // Menampilkan hasil ID yang dipilih
    public function kirim(Request $request)
    {
        $idKategori = $request->input('kategori_id'); // ambil ID dari form
        return view('validasikategori', compact('idKategori'));
    }
}
