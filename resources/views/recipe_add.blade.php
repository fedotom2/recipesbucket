@extends('layouts.base')

@section('content')
<form action="{{ route('recipeAdd') }}" method="post">
	{{ csrf_field() }}
	<input type="text" name="title" placeholder="Title"><br>
	<textarea name="description" placeholder="Description"></textarea><br>
	<textarea name="recipe" placeholder="Recipe"></textarea><br>
	<input type="submit">
</form>
@endsection