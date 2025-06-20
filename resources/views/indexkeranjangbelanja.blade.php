@extends('template')

@section('content')
	<h3>Data Keranjang Belanja</h3>
    <!--tombol beli hanya 1-->
    <a href="/keranjangbelanja/tambahkeranjangbelanja" class= "btn btn-success">Beli</a>
 	<br/>

	<table class="table table-striped  table-hover">
		<tr>
            <th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
            <td>{{ number_format($p->Harga, 0, ',', '.')}}</td>
            <td>{{ number_format($p->Jumlah * $p->Harga, 0, ',', '.')}}</td>

			<td>
				<a href="/keranjangbelanja/hapuskeranjangbelanja/{{ $p->ID }}"class= "btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- <!--gapake ini {{$keranjangbelanja->links()}}--> --}}
@endsection
