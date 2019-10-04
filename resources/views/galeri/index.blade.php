<!DOCTYPE html>
<html>
<head>
	<title>galeri</title>
</head>
<body>

	@extend('layouts.app')
@section('content')
<title>Membuat Galeri?</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<div class ="container">
		<div class ="row justify-content-center">
			<div class ="col-md-8">
				<div class ="card-header">Tambah Galeri</div>

				<div class="card-body">
				<a href="{!! route('galeri.create') !!}" class="btn btn-success">Tambah Data</a>
				<form mentod="post" action="{!!route ('artikel.store') !!}">
					@include('galeri.form')
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

<table border ="2">
	
	<tr>
		<td>ID</td>
		<td>Judul Isi</td>
		<td>Users ID</td>
	</tr>

	@foreach ($galeri as $item)

		<tr>
		<td>id</td>
		<td>judul isi </td>
		<td>users id</td>
	</tr>
@endforeach

</table>


</body>
</html>