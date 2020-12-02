@extends('templates.template')

@section('content')
	<h1 class="text-center">Visualizar</h1><hr>
	
	<div class="col-8 m-auto">
		@php
			$user=$book->find($book->id)->relUsers;
		@endphp
	
		<strong>Título:</strong> {{$book->title}}<br>
		<strong>Páginas:</strong> {{$book->pages}}<br>
		<strong>Preço:</strong> R$ {{$book->price}}<br><br>
		
		<strong>Autor:</strong> {{$user->name}}<br>
		<strong>Email do autor:</strong> {{$user->email}}
	</div>
	
@endsection