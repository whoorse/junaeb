@extends('layout')

@section('contenido')

{!! var_dump($noticiasList) !!}

{{-- @foreach ($noticiasList as $noticia)

<h5 class="titulo-seccion">{{ $noticia->titulo }}</h5>

<div class="post tarjeta">
	<div class="pic">
		<a href="#">
			<img src="http://placehold.it/320x210">
		</a>
	</div>
	<div class="texto">
		<span class="meta">{{ noticias }}</span>
		<h4 class="title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis pretium seme, turpis mi mollis leo</a></h4>
	</div>
	<div class="clearfix"></div>
</div>

<div class="buscar clearfix">
	<form action="">
	    <label for="query">Busca en las noticias</label>
	    <input type="text" id="query" placeholder="Ej.:“Lorem Ipsum“ ">
	    <input type="submit" id="boton" value="Enviar">
	</form>
</div>

@endforeach --}}
@stop