@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div>
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

								<td>							
									<a href="{!! route('artikel.show',[$item->id]) !!}" class="btn btn-success">Lihat</a>
									<a href="{!! route('artikel.edit',[$item->id]) !!}" class="btn btn-warning">Ubah</a>
									{!! Form::open(['route' => ['artikel.destroy', $item->id], 'method'=>'delete']) !!}
							        {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini?')"]); !!}
							        {!! Form::close() !!}
						        </td>
					        </tr>
						@endforeach
					</table>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection