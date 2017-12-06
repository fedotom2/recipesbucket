@extends('layouts.base')

@section('content')
<div class="res">
		<img src="{{ asset('images/recipe/1.jpg') }}" alt="" class="imgres">
		
		<h1>{{ $recipe->title }}</h1>
		<div class="res_autor">
			<p class="res_autor_header">Автор рецепта</p>
			<p>Автор рецепта: {{ $recipe->author->name }} {{ $recipe->author->lastname }}</p>
			<button class="bsub"><a href="{{ route('profileShow', ['id' => $recipe->author->id]) }}">Показати профіль</a></button>
		</div>
		<div class="autoradv">
			<p>{{ $recipe->description }}</p>
		</div>
		<div class="ingredients-list">
			<div class="tableres">
				<p class="res_autor_header">Інгридієнти</p>
				@foreach($ingredients as $ingredient)
				<div>
					<span class="nameing">{{ $ingredient->name }}</span>
					<span class="value">{{ $ingredient->value }}</span>
				</div>
				<br>
				@endforeach
			</div>
		</div>
		<div class="howtores">
			<h3>Приготування</h3>

			@for ($i = 1; $i < count($recipe->recipe); $i++)
		    <div>
				<div class="fela">{{ $i }}</div>
				<p>{{ $recipe->recipe[$i] }}</p>
			</div>
			<br>
			@endfor

		</div>
	</div>
@endsection