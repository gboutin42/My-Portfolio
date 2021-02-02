@extends('layouts.app')

@section('title')
	ERROR
@stop

@section('content')
	La page "<b>{{strtoupper($name ?? '' )}}</b>" n'éxiste pas !
@stop

@section('sidebar')
@stop