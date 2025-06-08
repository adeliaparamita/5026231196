@extends('template')

@section('content')
	<h3>Data Kulkas</h3>

	<a href="/kulkas" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/kulkas/storekulkas" method="post">
        <form action="/kulkas/storekulkas" method="post" class="form-horizontal">
		{{ csrf_field() }}
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="merkkulkas">
                        Merk Kulkas
                    </label>
                    <div class="col-6">
                            <input class="form-control"
                                type="text"
                                id="merkkulkas"
                                placeholder="Masukkan Merk Kulkas"
                                name="merkkulkas" required="required">
                        </div>
                    </div>
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="hargakulkas">
                        Harga Kulkas
                    </label>
                    <div class="col-6">
                            <input class="form-control"
                                type="number"
                                id="hargakulkas"
                                placeholder="Masukkan Harga Kulkas"
                                name="hargakulkas" required="required">
                        </div>
                    </div>
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="tersedia">
                        Tersedia (0=Tidak, 1=Ya)
                    </label>
                    <div class="col-6">
                        <input class="form-control"
                            type="number"
                            id="tersedia"
                            placeholder="Masukkan (0=Tidak, 1=Ya)"
                            name="tersedia" min="0" max="1" required="required">
                    </div>
                </div>
            <div class="form-group has-success">
                    <label class="control-label col-sm-2" for="diskon">
                        Diskon
                    </label>
                    <div class="col-6">
                            <input class="form-control"
                                type="number" step="0.01"
                                id="diskon"
                                placeholder="Masukkan Diskon (misal: 0.15)"
                                name="diskon" required="required">
                        </div>
                    </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection
