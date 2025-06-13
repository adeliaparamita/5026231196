@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <br />

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
                    <a href="/karyawan/editkaryawan/{{ $k->kodepegawai }}" class="btn btn-success">Edit</a>
                    <a href="/karyawan/hapuskaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="/karyawan/tambahkaryawan" class="btn btn-primary btn-block"> Tambah Data</a>

    <div class="mt-4">
        {{ $karyawan->links() }}
    </div>
@endsection
