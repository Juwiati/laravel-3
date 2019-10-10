@extends('layouts.app')

@section('content')

<body> 
<a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>

        <table border= "1">

        <tr> 
        <td>id </td>
        <td>judul</td>
        <td>isi</td>
        <td>users_id</td>
        <td>aksi</td>
        </tr>

        @foreach($galeri as $item)

        <tr>
        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->judul!!}</td>
        <td> {!! $item ->isi !!}</td>
        <td> {!! $item ->users_id !!}</td>
        </tr>
        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-succes">
        Lihat</a>


        @endforeach
    </table>
</body>

@endsection