<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	{!! Html::style('../resources/css/app.css') !!}
	{!! Html::style('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css') !!}
	{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
	{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}
</head>
	@extends('../inc/header')
<body style="min-height:100vh; display:flex; flex-direction:column;">
	<div style="flex:1; margin-top:5%; margin-bottom:1%">
		@yield('content')
	</div>
	@extends('../inc/footer')
</body>
</html>