@extends('layouts.app')

@section('title')
	ERROR
@stop

@section('content')
<div class="container bg-danger text-white text-center" style="border-radius: 4px;">
	<h1 class="col-md-12">404</h1>
	<h4 class="col-md-12" style="padding-bottom:2%">
		La page "<b>{{strtoupper($name ?? '' )}}</b>" n'éxiste pas !
	</h4> 
</div>
@stop

@section('sidebar')
@stop