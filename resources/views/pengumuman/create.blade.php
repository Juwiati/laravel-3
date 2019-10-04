@extends('layouts.app')

@section('content')
	<div class ="container">
		<div class ="row justify-content-center">
			<div class ="col-md-8">
				<div class ="card-header">List pengumuman</div>

				<div class="card-body">
					<form mentod="post" action="{!!route ('pengumuman.store') !!}">
					@include('pengumuman.from')
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
