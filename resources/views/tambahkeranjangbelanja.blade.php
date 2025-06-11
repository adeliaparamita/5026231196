@extends('template')

@section('content')
	<h3>Tambah Keranjang Belanja</h3>

	<a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/storekeranjangbelanja" method="post">
        <form action="/keranjangbelanja/storekeranjangbelanja" method="post" class="form-horizontal">
		{{ csrf_field() }}
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="KodeBarang">
                        Kode Barang
                    </label>
                    <div class="col-6">
                            <input class="form-control"
                                type="text"
                                id="KodeBarang"
                                placeholder="Masukkan Kode Barang"
                                name="KodeBarang" required="required">
                        </div>
                    </div>
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="Jumlah">
                        Jumlah Pembelian
                    </label>
                    <div class="col-6">
                            <input class="form-control"
                                type="text"
                                id="Jumlah"
                                placeholder="Masukkan Jumlah Pembelian"
                                name="Jumlah" required="required">
                        </div>
                    </div>
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="Harga">
                        Harga per item
                    </label>
                    <div class="col-6">
                        <input class="form-control"
                            type="text"
                            id="Harga"
                            placeholder="Masukkan Harga Per Item"
                            name="Harga" required="required">
                    </div>
                </div>
		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
