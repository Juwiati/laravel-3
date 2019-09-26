<!DOCTYPE html>
<html>
<head>
	<title>kategori galeri</title>
</head>
<body>

<table border ="2">
	
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Users ID</td>
	</tr>

	@foreach ($kategori_galeri as $item)

		<tr>
		<td>id</td>
		<td>nama</td>
		<td>users id</td>
	</tr>
@endforeach

</table>


</body>
</html>