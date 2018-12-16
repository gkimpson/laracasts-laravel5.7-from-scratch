@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    <h1>My First Website</h1>
    {{ $foo }}
    

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection