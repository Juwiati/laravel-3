<!DOCTYPE html>
<html>
<head>
	<title>berita</title>
</head>
<body>

<table border ="1">
	
	<tr>
		<td>ID</td>
		<td>Judul Isi</td>
		<td>Users ID</td>
	</tr>

	@foreach ($berita as $item)

		<tr>
		<td>id</td>
		<td>judul isi </td>
		<td>users id</td>
	</tr>
@endforeach

</table>


</body>
</html>