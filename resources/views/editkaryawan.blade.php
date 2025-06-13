70% penyimpanan digunakan … Jika ruang penyimpanan sudah penuh, Anda tidak akan dapat membuat, mengedit, dan mengupload file.
@extends('template')

@section('content')
    <h3>Edit Karyawan</h3>

    <a href="/karyawan" class="btn btn-info">Kembali</a>

    <br/>
    <br/>

    @foreach($karyawan as $k)
    <form action="/karyawan/updatekaryawan" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Pegawai
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="kodepegawai"
                       name="kodepegawai"
                       value="{{ $k->kodepegawai }}"
                       required="required"
                       readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="namalengkap"
                       name="namalengkap"
                       value="{{ $k->namalengkap }}"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="divisi"
                       name="divisi"
                       value="{{ $k->divisi }}"
                       required="required">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="departemen"
                       name="departemen"
                       value="{{ $k->departemen }}"
                       required="required">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endforeach

@endsection
