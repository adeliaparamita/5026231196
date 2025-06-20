@extends('template')

@section('content')
    <h3>Detail Karyawan</h3>

    <a href="/karyawan" class="btn btn-info">Kembali</a>
    <br/><br/>

    <div class="card shadow-sm">
        <div class="card-body p-4">
            <div class="mb-3 row">
                <label for="kodepegawai" class="col-sm-3 col-form-label fw-semibold">Kode Pegawai</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">{{ $karyawan->kodepegawai }}</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="namalengkap" class="col-sm-3 col-form-label fw-semibold">Nama Lengkap</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">{{ strtoupper($karyawan->namalengkap) }}</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="divisi" class="col-sm-3 col-form-label fw-semibold">Divisi</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">{{ $karyawan->divisi }}</p>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="departemen" class="col-sm-3 col-form-label fw-semibold">Departemen</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext">{{ strtolower($karyawan->departemen) }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
