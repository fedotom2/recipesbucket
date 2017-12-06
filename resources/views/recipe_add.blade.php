@extends('layouts.base')

@section('content')
<form action="{{ route('recipeAdd') }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="title" placeholder="Title"><br>
	<textarea name="description" placeholder="Description"></textarea><br>
	<textarea name="recipe" placeholder="Recipe"></textarea><br>
	<div id="ingredients">
		<div style="border: 1px solid;">
			<input type="text" name="ingredient1" placeholder="Ingredient">
			<input type="text" name="value1" placeholder="Value">
		</div>
	</div>
	<button id="addIngredient_btn">Add ingredient</button>
	<input type="submit">
</form>

<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script>
	;(function ($) {
		let i = 2;
		const ingredients = $('#ingredients');
		const addIngredient_btn = $('#addIngredient_btn');
		addIngredient_btn.click(function (e) {
			ingredients.append('<div style=\"border: 1px solid;\"><input type=\"text\" name=\"ingredient' 
				+ i + '\" placeholder=\"Ingredient\"><input type=\"text\" name=\"value'
				+ i + '\" placeholder=\"Value\"></div>');

			i++;
			e.preventDefault();
		});

	})(jQuery);
</script>
@endsection