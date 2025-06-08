@extends('template')

@section('content')
    <h3>Edit Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        {{-- Nama Pegawai Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="nama">
                Nama
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="nama"
                       placeholder="Masukkan Nama Pegawai"
                       name="nama" required="required" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        {{-- Jabatan Pegawai Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="jabatan">
                Jabatan
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="jabatan"
                       placeholder="Masukkan Jabatan Pegawai"
                       name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        {{-- Umur Pegawai Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="umur">
                Umur
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="number"
                       id="umur"
                       placeholder="Masukkan Umur Pegawai"
                       name="umur" required="required" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        {{-- Alamat Pegawai Field (Textarea) --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="alamat">
                Alamat
            </label>
            <div class="col-6">
                <textarea class="form-control"
                          id="alamat"
                          placeholder="Masukkan Alamat Pegawai"
                          name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

        {{-- Submit Button --}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10"> {{-- Offset untuk menyesuaikan posisi tombol --}}
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
    @endforeach

@endsection
