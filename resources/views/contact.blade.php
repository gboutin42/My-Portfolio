@extends('layouts.app')

@section('title')
	CONTACT
@endsection

@section('content')
	<div class="container" style="background-color:grey; border:solid 1px black">
		<h1 style="display:flex; justify-content:center">CONTACT ME</h1>
		<div class="row">
			<div class="col-md-5">
				<h3>Coordonnées</h3><br>
				<div style="diplay:flex; justify-content: space-between">
					<h4>Adresse</h4>
					<div>5 rue Léopold Réchossière</div>
					<div>93300 Aubervilliers</div>
					<h4>Telephone</h4>
					<a href="tel:0632221421">+33 6 32 22 14 21 </a>
					<h4>E-mail</h4>
					<div> boutin_gregory@yahoo.com </div>
				</div>
			</div>
			<div class="col-md-7">
				<h3>Par e-mail</h3>
				{{ Form::open(['url' => 'contact']) }}
				<!-- <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}"> -->
					{{ Form::text('name', null, ['class' => 'form-control form-control', 'placeholder' => 'Nom / Prénom *']) }} <br>
					<!-- {{ $errors->first('name', '<small class="help-block">:message</small>') }} <br> -->
				<!-- </div> -->
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'E-mail *']) }} <br>
					{{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message *']) }} <br>
					{{ Form::submit('Envoyer', ['class'=>'btn btn-primary btn-lg btn-block']) }}
				{{	Form::close() }}
			</div>
		</div>
	</div>
@endsection

