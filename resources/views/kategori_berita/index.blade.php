<!DOCTYPE html>
<html>
<head>
    <title> List Kategori Berita</title>
</head>
<body>
<a href="{!! route('kategori_berita.create') !!}" class="btn btn-primary">Tambah Data</a>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>User ID</td>
        <td>Aksi</td>
    </tr>

    @foreach($kategori_berita as $item)


    <tr>
    <td> {!! $item->id !!}</td>
    <td> {!! $item->nama !!}</td>
    <td> {!! $item->users_id !!}</td>
    <td>
        <a href="{!! route('kategori_berita.show',[$item->id]) !!}" class="btn btn-success">
            Lihat
        </a>


    <a href="{!! route('kategori_berita.edit',[$item->id]) !!}" class="btn btn-warning">
            Ubah
        </a>
        {!! Form::open(['route' => ['kategori_berita.destroy', $item->id], 'method'=>'delete']) !!}
        {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}
        {!! Form::close() !!}
</tr>
@endforeach

</table>

</body>
</html>