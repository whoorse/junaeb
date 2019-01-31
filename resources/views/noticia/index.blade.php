@extends('layout')

@section('contenido')

@foreach($noticias as $noticiasItem)
	<div class="post tarjeta">
		<div class="pic">
			<a href="#">
				<img src="http://placehold.it/320x210">
			</a>
		</div>
		<div class="texto">
			<span class="meta">{{ date('d-m-Y', strtotime($noticiasItem->FECHA_C)) }}</span>
			<h4 class="title"><a href="#">{{ $noticiasItem -> TITULO }}</a></h4>
		</div>
		<div class="clearfix"></div>
	</div>
@endforeach
@stop