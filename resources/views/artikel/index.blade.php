<!DOCTYPE html>
<html>
<head>
	<title>artikel</title>
</head>
<body>

<table border ="2">
	
	<tr>
		<td>ID</td>
		<td>Judul Isi</td>
		<td>Users ID</td>
	</tr>

	@foreach ($artikel as $item)

		<tr>
		<td>id</td>
		<td>judul isi </td>
		<td>users id</td>
	</tr>
@endforeach

</table>


</body>
</html>