@extends ('layouts.app')

@section('content')
	<div class ="container">
		<div class ="row justify-content-center">
			<div class ="col-md-8">
				<div class ="card-header">List Galeri</div>

				<div class="card-body">
					<form mentod="post" action="{!!route ('galeri.store') !!}">
					@include('galeri.from')
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
