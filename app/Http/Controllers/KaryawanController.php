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
        $karyawan = DB::table('karyawan')->get();

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
        // Lakukan Validasi Input
        $request->validate([
            // 'kode' adalah nama atribut 'name' dari input field kodepegawai di form Anda
            'kode' => 'required|alpha_num|size:5|unique:karyawan,kodepegawai',
            'nama' => 'required|string|max:50',
            'divisi' => 'required|string|max:20',
            'departemen' => 'required|string|max:20',
        ], [
            // Pesan kustom jika validasi gagal
            'kode.unique' => 'Kode Pegawai sudah ada. Mohon gunakan kode lain.',
            'kode.required' => 'Kode Pegawai wajib diisi.',
            'kode.alpha_num' => 'Kode Pegawai hanya boleh berisi huruf dan angka.',
            'kode.size' => 'Kode Pegawai harus 5 karakter.',
            'nama.required' => 'Nama Lengkap wajib diisi.',
        ]);

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

	// method untuk hapus data karyawan
	public function hapuskaryawan($id)
	{
		// menghapus data karyawan berdasarkan kode yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

    public function view($kodepegawai) {
        // Mengambil data karyawan berdasarkan kodepegawai
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();

        // Cek apakah karyawan ditemukan
        if (!$karyawan) {
            abort(404, 'Karyawan tidak ditemukan.'); // Atau redirect dengan pesan error
        }

        // Mengirim data karyawan ke view detail
        return view('viewkaryawan',['karyawan' => $karyawan]);
    }
}
