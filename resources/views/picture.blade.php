@extends('layouts.app')

@section('title')
	Picture
@endsection

@section('content')
	<div class="col-sm-offset-4 col-sm-4">
		<div class="panel panel-info">
			<div class="panel-heading">Ajouter une photo</div>
			<div class="panel-body">
				@if(session()->has('error'))
					<div class="alert alert-danger">{{ session('error') }}</div>
				@endif
				{{ Form::open(['url' => 'picture', 'files' => true]) }}
					<div class="form-group {{ $errors->has('picture') ? 'has-warning' : '' }}">
						{{ Form::file('picture', ['class' => 'form-control']) }}
						<p class="form-text text-danger">{{ $errors->first('picture', ':message') }}</p>
					</div>
					{{ Form::submit('Soumettre !', ['class' => 'btn btn-info btn-block']) }}
				{{ Form::close() }}
			</div>
		</div>
	</div>
@endsection