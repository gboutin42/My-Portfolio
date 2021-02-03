<footer class="text-white col-md-12">
	<div class="container">
		<h3 class="text-center">CONTACT</h1>
		<div class="row">
			<div class="col-md">
				<h3>Coordonnées</h3><br>
				<div style="diplay:flex; justify-content: space-between">
					<h4>Adresse</h4>
					<div>5 rue Léopold Réchossière</div>
					<div>93300 Aubervilliers</div>
					<br>
					<h4>Téléphone</h4>
					<a href="tel:0632221421" style="color:dodgerblue">+33 6 32 22 14 21 </a>
					<br><br>
					<h4>E-mail</h4>
					<div> boutin_gregory@yahoo.com </div>
					<br>
					<a href="https://www.linkedin.com/in/boutin-gregory" title="Linkedin" ><img src="../resources/imgs/Logo-LinkedIn-rond.png" alt="logo-linkedin" class="logo-social-network"></a>
				</div>
			</div>
			<div id="contactMe" class="col-md">
				<h3>Par e-mail</h3>
				{{ Form::open(['url' => 'contact']) }}
					<div class="form-group {!! $errors->has('nom') ? 'has-warning' : '' !!}">
						{{ Form::text('name', null, ['class' => 'form-control form-control', 'placeholder' => 'Nom / Prénom *']) }}
						<p class="form-text text-warning">{{ $errors->first('name', ':message') }}</p>
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-warning' : '' !!}">
						{{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'E-mail *']) }}
						<p class="form-text text-warning">{{ $errors->first('email', ':message') }}</p>
					</div>
					<div class="form-group {!! $errors->has('text') ? 'has-warning' : '' !!}">
						{{ Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Message *']) }}
						<p class="form-text text-warning">{{ $errors->first('text', ':message') }}</p>
					</div>
					{{ Form::submit('Envoyer', ['class'=>'btn btn-primary btn-lg btn-block']) }}
				{{	Form::close() }}
			</div>
		</div>
		<hr>
		<!-- Copyright -->
		<h4 class="text-center">
			© 2021 Copyright | Boutin Grégory
		</h4>
		<!-- Copyright -->
	</div>
</footer>