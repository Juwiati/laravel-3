<!DOCTYPE html>
<html>
<head>
	<title>artikel</title>
</head>
<body>

<a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border ="2">
	
	<tr>
		<td>ID</td>
		<td>Judul</td>
		<td>Isi</td>
		<td>Users ID</td>
		<td>Aksi</td>
	</tr>

	@foreach ($artikel as $item)

		<tr>
		<td>{!! $item->id !!}</td>
		<td>{!! $item->judul !!}</td>
		<td>{!! $item->isi !!} </td>
		<td>{!! $item->users_id !!}</td> 
	</tr>

	<a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-success">
			Lihat
		</a>
@endforeach

</table>


</body>
</html>