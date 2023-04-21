@extends('layout')

@section('content')
    <h1>Contact Form Edit</h1>
    <a href="{{route('phone.index')}}"> Lists </a>
    <hr>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {{Form::model($data['row'], ['url'=> route('phone.update', $data['row']->id), 'method'=>'PUT', 'role'=>"form"])}}
        {{ form::hidden('id', $data['row']->id ) }}
        @include('includes.form')
    </form>
@endsection