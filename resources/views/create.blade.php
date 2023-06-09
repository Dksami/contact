@extends('layout')

@section('content')
    <h1>Contact Form</h1>
    <a href="{{route('phone.index')}}"> Lists </a>
    <hr>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{Form::open(['url'=> route('phone.store'), 'method'=>'POST', 'role'=>"form"])}}
        @include('includes.form')
    {{Form::close()}}
@endsection