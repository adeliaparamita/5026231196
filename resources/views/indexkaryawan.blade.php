@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <br />
    {{-- START: Tambahan Kode untuk Menampilkan Pesan SUKSES --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- END: Tambahan Kode untuk Menampilkan Pesan SUKSES --}}

    {{-- START: Tambahan Kode untuk Menampilkan Pesan ERROR --}}
    {{-- Perhatikan: Validasi error unik (misal kodepegawai ganda) akan muncul di halaman 'tambahkaryawan' --}}
    {{-- Namun, jika ada error lain yang Anda kirimkan ke session('error') dari controller, ini akan muncul di sini --}}
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- END: Tambahan Kode untuk Menampilkan Pesan ERROR --}}

    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>
                <td>
                    <a href="{{ url('/karyawan/view/' . $k->kodepegawai) }}" class="btn btn-info btn-sm">View</a>
                    <a href="/karyawan/hapuskaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="/karyawan/tambahkaryawan" class="btn btn-primary btn-block"> Tambah Karyawan</a>

    <div class="mt-4">
    </div>
@endsection
