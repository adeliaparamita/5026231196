<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    public function indexkaryawan()
    {
    	// mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->paginate(10);

    	// mengirim data karyawan ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);

    }

	// method untuk menampilkan view form tambah karyawan
	public function tambahkaryawan()
	{

		// memanggil view tambah
		return view('tambahkaryawan');

	}

	// method untuk insert data ke table karyawan
	public function storekaryawan(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');

	}

        // method untuk edit data karyawan
    public function editkaryawan($kp)
    {
        // mengambil data karyawan berdasarkan kodepegawai yang dipilih
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kp)->get();
        // passing data karyawan yang didapat ke view editkaryawan.blade.php
        return view('editkaryawan', ['karyawan' => $karyawan]);
    }

	// update data karyawan
	public function updatekaryawan(Request $request)
	{
		// update data karyawan
		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman sofa
		return redirect('/karyawan');
	}

	// method untuk hapus data karyawan
	public function hapuskaryawan($id)
	{
		// menghapus data karyawan berdasarkan kode yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}
}
