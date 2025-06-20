@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Hasil Pilihan</h3>
    <p>Anda telah memilih Kategori dengan kode: <strong>{{ $idKategori }}</strong></p>
    <a href="/kategori" class="btn btn-secondary">Kembali</a>
</div>
@endsection
