@extends('template')

@section('content')
<div class="container mt-4">
    <h3>Pilih Kategori</h3>

    <form action="/kategori/kirim" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kategori_id">Kategori:</label>
            <select name="kategori_id" id="kategori_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategori as $item)
                    <option value="{{ $item->ID }}">{{ $item->Nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">KIRIM</button>
    </form>
</div>
@endsection
