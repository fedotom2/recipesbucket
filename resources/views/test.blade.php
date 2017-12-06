@extends('layouts.base')

@section('content')
<!-- <pre>{{ print_r($data) }}</pre> -->
<!-- {{ end($data) }} -->
@for($i = 1; $i <= substr(key($data), 5); $i++)
	{{ $data['ingredient' . $i] }} =
	{{ $data['value' . $i] }} 
	<br>
@endfor
@endsection