<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelajarDoangController extends Controller
{
    public function indexbelajardoang()
    {
        $belajardoang = DB::table('belajardoang')->first(); // ambil satu pesan saja

        $pesanAsli = $belajardoang->pesan;

        // Peta emoticon ke gambar
        $emoticons = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];

        // Pisah string menjadi array kata
        $kata = explode(" ", $pesanAsli);

        // Ubah kata jadi gambar jika cocok
        foreach ($kata as &$k) {
            if (array_key_exists($k, $emoticons)) {
                $k = "<img src='" . asset('emot/' . $emoticons[$k]) . "' width='20'>";
            }
        }

        // Gabungkan kembali jadi string HTML
        $pesanKonversi = implode(" ", $kata);

        return view('indexbelajardoang', ['pesan' => $pesanKonversi]);
    }
}
