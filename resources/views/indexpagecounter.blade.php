    <title>5026231196 - Ni Kadek Adelia Paramita Putri</title>

@extends('template')

@section('content')
<div class="jumbotron d-flex align-items-center"
     style="
        background-color: #e6ffe6;
        height: 60px;
        margin-bottom: 0;
        margin-left: calc(-100vw / 2 + 50%);
        margin-right: calc(-100vw / 2 + 50%);
        width: 100vw;
        max-width: unset;
        border-radius: 0;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 20px;
     ">
    <p class="mb-0" style="font-size: 1rem; font-weight: normal; color: #333;">
        Anda Pengunjung ke : {{$jumlahpengunjung}}
    </p>
</div>
@endsection
