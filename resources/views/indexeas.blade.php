@extends('template')

@section('content')
    <h3>My Karyawan</h3>

    <br />
    <table class="table table-striped">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($mykaryawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ $k->departemen }}</td>
                <td>
                    <a href="{{ url('/eas/viewmykaryawan/' . $k->kodepegawai) }}" class="btn btn-info btn-sm">View</a>
                    <a href="/eas/editmykaryawan/{{ $k->kodepegawai }}" class="btn btn-danger">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
