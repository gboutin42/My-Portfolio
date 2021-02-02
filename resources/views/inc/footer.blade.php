<footer style="background-color:#333; color:#FFF; bottom:0;">
	<div class="container">
		<h1 class="text-center">CONTACT ME</h1>
		<div class="row">
			<div class="col-md-6">
				<h3>Coordonnées</h3><br>
				<div style="diplay:flex; justify-content: space-between">
					<h4>Adresse</h4>
					<div>5 rue Léopold Réchossière</div>
					<div>93300 Aubervilliers</div>
					<br>
					<h4>Telephone</h4>
					<a href="tel:0632221421" style="color:dodgerblue">+33 6 32 22 14 21 </a>
					<br><br>
					<h4>E-mail</h4>
					<div> boutin_gregory@yahoo.com </div>
					<br>
					<a href="https://www.linkedin.com/in/boutin-gregory" title="Linkedin">Linkedin<img src="" alt=""></a>
				</div>
			</div>
			<div class="col-md-6">
				<h3>Par e-mail</h3>
				{{ Form::open(['url' => 'contact']) }}
					{{ Form::text('name', null, ['class' => 'form-control form-control', 'placeholder' => 'Nom / Prénom *']) }} <br>
					{{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'E-mail *']) }} <br>
					{{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message *']) }} <br>
					{{ Form::submit('Envoyer', ['class'=>'btn btn-primary btn-lg btn-block']) }}
				{{	Form::close() }}
			</div>
		</div>
	</div>
  <!-- Copyright -->
  <div class="text-center" style="background-color: #232323; padding:2%; margin-top:3%">
    © 2020 Copyright | Boutin Grégory
  </div>
  <!-- Copyright -->
</footer>