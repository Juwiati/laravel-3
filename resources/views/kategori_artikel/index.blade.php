
<html>
<head>
	<title>kategori artikel</title>
</head>
<body>

<table border ="1">
	
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Users ID</td>
	</tr>

	@foreach ($kategori_artikel as $item)

		<tr>
		<td>id</td>
		<td>nama</td>
		<td>users id</td>
	</tr>
@endforeach

</table>


</body>
</html>