@section('content')
	<div class ="container">
		<div class ="row justify-content-center">
			<div class ="col-md-8">
				<div class ="card-header">List Berita</div>

				<div class="card-body">
					{!! Form::model($berita, ['route'=>['berita.update', $berita->id], 'method'=>'patch']) !!}

					@include('berita.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection