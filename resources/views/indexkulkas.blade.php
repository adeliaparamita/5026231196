@extends('template')

@section('content')
	<h3>Data Kulkas</h3>

	<a href="/kulkas/tambahkulkas" class="btn btn-primary"> + Tambah Kulkas Baru</a>

	<p>Cari Data Kulkas :</p>
	<form action="/kulkas/carikulkas" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Kulkas ..">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped  table-hover">
		<tr>
			<th>Merk Kulkas</th>
			<th>Harga Kulkas</th>
			<th>Tersedia</th>
			<th>Diskon</th>
            <th>Opsi</th>
		</tr>
		@foreach($kulkas as $p)
		<tr>
			<td>{{ $p->merkkulkas }}</td>
			<td>{{ $p->hargakulkas }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>{{ $p->diskon }}</td>
			<td>
                <a href="/kulkas/editkulkas/{{ $p->ID }} "class= "btn btn-success">Edit</a>
				<a href="/kulkas/hapuskulkas/{{ $p->ID }}"class= "btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$kulkas->links()}}
@endsection
