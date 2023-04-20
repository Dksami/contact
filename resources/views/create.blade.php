@extends('layout')

@section('content')
    <h1>Contact Form</h1>
    <a href="{{route('çontactLists')}}"> Lists </a>
    <hr>
    <form action="{{ route('contactFormSubmit')}}" method="post">
        {{ csrf_field() }}
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone">

        <button type="submit"> Submit </button>
    </form>
@endsection