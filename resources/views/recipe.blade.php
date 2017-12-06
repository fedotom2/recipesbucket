@extends('layouts.base')

@section('content')
<div class="res">
		<img src="{{ asset('images/recipe/1.jpg') }}" alt="" class="imgres">
		
		<h1>{{ $recipe->title }}</h1>
		<div class="res_autor">
			<p class="res_autor_header">Автор рецепта</p>
			<p>Автор рецепта: Name Lastname</p>
			<button class="bsub"><a href="#">Показати профіль</a></button>
		</div>
		<div class="autoradv">
			<p>{{ $recipe->description }}</p>
		</div>
		<div class="ingredients-list">
			<div class="tableres">
				<p class="res_autor_header">Інгридієнти</p>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
				<div>
					<span class="nameing">name_ingridient</span>
					<span class="value">value</span>
				</div>
				<br>
			</div>
		</div>
		<div class="howtores">
			<h3>Приготування</h3>
			<div>
				<div class="fela">1</div>
				<p>{{ $recipe->recipe }}</p>
			</div>

		</div>
	</div>
@endsection