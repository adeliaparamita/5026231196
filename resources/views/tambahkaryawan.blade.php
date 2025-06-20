@extends('template')

@section('content')
    <h3>Data Karyawan</h3>

    <br />
    <br />
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="/karyawan/storekaryawan" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kode">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kode" placeholder="Masukkan Kode" name="kode"
                    required="required" maxlength="5">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="nama">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="nama" placeholder="Masukkan Nama Lengkap" name="nama"
                    required="required" maxlength="50">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="divisi" placeholder="Masukkan Divisi" name="divisi"
                    required="required" maxlength="5">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="departemen" placeholder="Masukkan Departmen"
                    name="departemen" required="required" maxlength="10">
            </div>
        </div>

        <a href="/karyawan" class="btn btn-info"> Kembali</a>

        <input type="submit" value="SIMPAN" class="btn btn-success">
    </form>
@endsection
