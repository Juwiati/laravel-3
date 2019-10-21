@extends('layouts.app')

@section('content')

<body> 
<a href="{!! route('pengumuman.create') !!}" class="btn btn-primary">Tambah Data</a>

        <table border= "1">
        <tr> 
        <td> id </td>
        <td> judul </td>
        <td> isi </td>
        <td> users_id </td>
        <td> aksi </td>
        </tr>

        @foreach($pengumuman as $item)

        <tr>

        <td> {!! $item ->id !!}</td>
        <td> {!! $item ->judul!!}</td>
        <td> {!! $item ->isi !!}</td>
        <td> {!! $item ->users_id !!}</td>
        <td>
        <a href="{!! route('pengumuman.show',[$item->id]) !!}" 
        class="btn btn-succes">
        Lihat</a>

        <a href="{!! route('pengumuman.show',[$item->id]) !!}" 
        class="btn btn-warning">
        Ubah</a>
        {!! Form::open(['route' => ['pengumuman.destroy', $item->id], 'method'=>'delete']) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}
        {!! Form::close() !!}

        </tr>

        @endforeach
    </table>
</body>

@endsection