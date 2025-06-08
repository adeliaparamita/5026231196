@extends('template')

@section('content')
    <h3>Edit kulkas</h3>

    <a href="/kulkas" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    @foreach($kulkas as $p)
    <form action="/kulkas/updatekulkas" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $p->ID }}">

        {{-- Merk Kulkas Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merkkulkas">
                Merk Kulkas
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="text"
                       id="merkkulkas"
                       placeholder="Masukkan Merk Kulkas"
                       name="merkkulkas" required="required" value="{{ $p->merkkulkas }}">
            </div>
        </div>

        {{-- Harga Kulkas Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="hargakulkas">
                Harga Kulkas
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="number"
                       id="hargakulkas"
                       placeholder="Masukkan Harga Kulkas"
                       name="hargakulkas" required="required" value="{{ $p->hargakulkas }}">
            </div>
        </div>

        {{-- Tersedia Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia (0=Tidak, 1=Ya)
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="number"
                       id="tersedia"
                       placeholder="Masukkan (0=Tidak, 1=Ya)"
                       name="tersedia" min="0" max="1" required="required" value="{{ $p->tersedia }}">
            </div>
        </div>

        {{-- Diskon Field --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="diskon">
                Diskon
            </label>
            <div class="col-6">
                <input class="form-control"
                       type="number" step="0.01"
                       id="diskon"
                       placeholder="Masukkan Diskon (misal: 0.15)"
                       name="diskon" required="required" value="{{ $p->diskon }}">
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
