@extends('layouts.base')

@section('content')

@foreach($recipes as $recipe)
<div class="probootstrap-block-image">
      
  <img src="{{ asset('images/home/img_square_2.jpg') }}">

  <div class="text">
    <span class="date">{{ $recipe->updated_at }}</span>
    <h3><a href="{{ route('recipeShow', ['id' => $recipe->id]) }}">{{ $recipe->title }}</a></h3>
    <p>{{ $recipe->description }}</p>
    <p class=""><a href="{{ route('recipeShow', ['id' => $recipe->id]) }}" class="probootstrap-custom-link link-sm">Read More</a></p>
  </div>

</div>
@endforeach

@endsection