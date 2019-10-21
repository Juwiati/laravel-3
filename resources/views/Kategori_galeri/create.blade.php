@extends('layouts.app')

@section('content')
	<div class ="container">
		<div class ="row justify-content-center">
			<div class ="col-md-8">
				<div class ="card-header">Tambah Kategori Galeri</div>

				<div class="card-body">
					{!! Form::open (['route' => 'kategori_galeri.store', 'method' =>'post']) !!}

					@include('kategori_galeri.form')

					{!! Form::close() !!}
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
