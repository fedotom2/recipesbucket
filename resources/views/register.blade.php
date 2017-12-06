@extends('layouts.base')

@section('content')
{{ Form::open(['route' => ['register']]) }}
	<!-- name -->
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}

    <!-- email -->
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email') }}      
	
	<!-- email -->
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}  

    {{ Form::submit('Update Nerd!') }}
{{ Form::close() }}
@endsection