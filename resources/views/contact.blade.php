@extends('layout')

@section('content')
    <h1>Contact Lists</h1>
    <a href="{{route('phone.create')}}"> New </a>
    <hr>
    <table border=1 cellpadding="2" cellspacing=0>
        <thead>
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($row  as $key=>$d)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $d->name }}</td>
                <td> {{ $d->phone }}</td>
                <td><a href="{{ route('phone.edit', ['phone'=>$d->id] ) }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection